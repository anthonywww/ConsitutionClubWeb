<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	// Home page
	public function index() {
		$this->load->view("header");
		$this->load->view("home");
		$this->load->view("footer");
	}

	// About page
	public function about() {
		$this->load->view("header");
		$this->load->view("about");
		$this->load->view("footer");
	}

	// U.S. Constitution page
	public function us_constitution() {
		$this->load->view("header");
		$this->load->view("us_constitution");
		$this->load->view("footer");
	}

	// Contact us page
	public function contact_us() {

		$data = array();

		if (!empty($_POST)) {
			// TODO: handle POST request
			// TODO: add successful response to $data array.
		}

		// Handle page request
		$this->load->view("header");
		$this->load->view("contact_us", $data);
		$this->load->view("footer");
	}

	// Custom 404 page
	public function page_missing() {
		$this->load->view("header");
		$this->load->view("page_missing");
		$this->load->view("footer");
	}

}
