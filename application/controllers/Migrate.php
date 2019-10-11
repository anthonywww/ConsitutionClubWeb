<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

	private function show_page($page_data=array()) {
		$this->load->view("header", array("title" => "Database Migration"));
		$this->load->view("status_page", $page_data);
		$this->load->view("footer");
	}

	// Do migration if enabled
	public function index() {

		$this->load->config("migration");

		if (empty($this->config->item("migration_enabled"))) {
			$data = array();
			$data["title"] = "Migration Disabled";
			$data["message"] = "<p>Migrations are disabled in the <code>application/config/migration.php</code> file.</p>\n";
			$this->show_page($data);
			return;
		}

		// Load and execute the migration
		$this->load->library("migration");
		$status = $this->migration->latest();

		if (empty($status)) {
			$data = array();
			$data["title"] = "Migration Error";
			$data["message"] = "<p>" . $this->migration->error_string() . "</p>\n";
			$str = "<br>\n";
			$str .= "<ul>\n";

			foreach ($this->migration->find_migrations() as $line) {
				$str .= "<li>$line</li>\n";
			}

			$data["message"] .= ($str . "</ul>\n");
			$this->show_page($data);
			return;
		}

		$data = array();
		$data["title"] = "Successful Migration";
		$data["message"] = "<p>The database was successfully migrated to version <code>" . $status . "</code>.</p>\n";
		$data["message"] .= "<p>You can disable the migrator in <code>application/config/migration.php</code>.</p>\n";
		$this->show_page($data);
		return;
	}

}
