<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Constitution extends CI_Controller {

	public function index() {
		$header_data = array();
		$header_data["title"] = "U.S. Constitution";
		$this->load->view("header", $header_data);
		$this->load->view("constitution/index");
		$this->load->view("footer");
	}

	public function preamble() {
		$header_data = array();
		$header_data["title"] = "Preamble";
		$this->load->view("header", $header_data);
		$this->load->view("constitution/preamble");
		$this->load->view("footer");
	}

	public function articles() {
		$header_data = array();
		$header_data["title"] = "Articles";
		$this->load->view("header", $header_data);
		$this->load->view("constitution/articles");
		$this->load->view("footer");
	}

	public function ammendments() {
		$header_data = array();
		$header_data["title"] = "Ammendments";
		$data = array();



		$this->load->view("header", $header_data);
		$this->load->view("constitution/ammendments", $data);
		$this->load->view("footer");
	}

}
