<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	// Show events calendar
	public function index() {
		$this->load->view("header");
		$this->load->view("events");
		$this->load->view("footer");
	}

	// Add an event
	public function add() {
		// Check permission

		$this->load->view("header");
		$this->load->view("add_event");
		$this->load->view("footer");
	}

	// Remove an event
	public function remove($id=null) {
		// Check permission


		$data = array();

		if (!empty($id)) {
			
		}

		$this->load->view("header");
		$this->load->view("events", $data);
		$this->load->view("footer");
	}

	// Edit an event
	public function edit($id=null) {
		// Check permission


		$this->load->view("header");
		$this->load->view("events");
		$this->load->view("footer");
	}

}
