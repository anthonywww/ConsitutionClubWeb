<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	public function index() {
		$header_data = array();
		$header_data["title"] = "About Us";
		$this->load->view("header", $header_data);
		$this->load->view("about-us/index");
		$this->load->view("footer");
	}

	public function constitution() {
		$header_data = array();
		$header_data["title"] = "Club Constitution";
		$this->load->view("header", $header_data);
		$this->load->view("about-us/constitution");
		$this->load->view("footer");
	}

	public function goals() {
		$header_data = array();
		$header_data["title"] = "Goals";
		$this->load->view("header", $header_data);
		$this->load->view("about-us/goals");
		$this->load->view("footer");
	}

	public function leadership() {
		$header_data = array();
		$header_data["title"] = "Leadership";
		$data = array();


		$this->load->view("header", $header_data);
		$this->load->view("about-us/leadership", $data);
		$this->load->view("footer");
	}

}
