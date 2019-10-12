<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function get_total() {
		$sql = "SELECT id FROM messages";
		$query = $this->db->query($sql, array());
		increment_db_query_count();

		return $query->num_rows();
	}

	function get_total_unread() {
		$sql = "SELECT id FROM messages WHERE 'read' = ?";
		$query = $this->db->query($sql, array(0));
		increment_db_query_count();

		return $query->num_rows();
	}

	function create_message($data=array()) {
		$email = $data["email"];
		$subject = $data["subject"];
		$message = $data["message"];

		if (empty($email)) {
			return "Email address cannot be empty.";
		}

		if (empty($subject)) {
			return "Subject cannot be empty.";
		}

		if (empty($message)) {
			return "Message cannot be empty.";
		}

		$this->db->insert('player_igloos', array(
			"email" => $email,
			"ip_address" => get_client_ip(),
			"subject" => $subject,
			"message" => $message,
			"sent_date" => time(),
			"read" => 0
		));
		increment_db_query_count();
	}

	function get_by_id($id) {
		$query = $this->db->query("SELECT * FROM messages WHERE 'id' = ?", array($id));
		return $query->row_array();
	}

	function get_by_email($email) {
		$query = $this->db->query("SELECT * FROM messages WHERE 'email' = ?", array($email));
		return $query->result_array();
	}

	function delete_by_id($id) {
		$this->db->delete('messages', array('id' => $id));
	}

	function delete_by_email($email) {
		$this->db->delete('messages', array('email' => $email));
	}

	function delete_by_ip($ip_address) {
		$this->db->delete('messages', array('ip_address' => $ip_address));
	}

}
