<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	// Show posts
	public function index() {
		$this->load->view("header");
		$this->load->view("posts");
		$this->load->view("footer");
	}

	// Make a post
	public function add() {
		// Check permission

		$this->load->view("header");
		$this->load->view("add_post");
		$this->load->view("footer");
	}

	// Delete a post
	public function remove($id=null) {
		// Check permission


		$data = array();

		if (!empty($id)) {
			
		}

		$this->load->view("header");
		$this->load->view("posts", $data);
		$this->load->view("footer");
	}

	// Edit a post
	public function edit($id=null) {
		// Check permission


		$this->load->view("header");
		$this->load->view("posts");
		$this->load->view("footer");
	}

}
