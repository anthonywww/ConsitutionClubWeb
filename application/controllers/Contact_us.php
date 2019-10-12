<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function index() {
		$header_data = array();
		$header_data["title"] = "Contact Us";
		$body_data = array();
		//$body_data["error_message"] = "test";
		//$body_data["success_message"] = "test";








		$body_data["csrf_token"] = gen_csrf_token();
		$this->load->view("header", $header_data);
		$this->load->view("contact-us/index", $body_data);
		$this->load->view("footer");
	}

}
