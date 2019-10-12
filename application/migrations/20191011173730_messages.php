<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_messages extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(

			// Auto incrementing ID
			'id' => array(
				'type' => 'BIGINT',
				'constraint' => 12,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
				'null' => FALSE
			),

			// Email Address
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => false
			),

			// IP address of the sender of the message
			'ip_address' => array(
				'type' => 'VARCHAR',
				'constraint' => 60,
				'null' => false
			),

			// Message subject
			'subject' => array(
				'type' => 'VARCHAR',
				'constraint' => 40,
				'null' => false
			),

			// Message text
			'message' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			),

			// UNIX timestamp of the date the account was created (registration date)
			'sent_date' => array(
				'type' => 'BIGINT',
				'constraint' => 12,
				'unsigned' => true,
				'null' => false
			),

			// Marked already read
			'read' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
				'unsigned' => true,
				'null' => false
			)
		));

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('email', FALSE);
		$this->dbforge->add_key('sent_date', FALSE);
		$this->dbforge->create_table('messages');
	}

	public function down() {
		$this->dbforge->drop_table('messages');
	}

}
