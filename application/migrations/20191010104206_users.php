<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_users extends CI_Migration {

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

			// First name of user, 3 to 10 characters
			'first_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 10,
				'null' => false
			),

			// Last name of user, 3 to 16 characters
			'last_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 16,
				'null' => false
			),

			// Hashed & Salted password, 60 characters
			'password' => array(
				'type' => 'CHAR',
				'constraint' => 60,
				'null' => false
			),

			// Email Address
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => false
			),

			// Permission Level (0=Member, 1=Secretary, 2=Treasurer, 3=Vice-President, 4=President)
			'permission' => array(
				'type' => 'TINYINT',
				'unsigned' => true,
				'constraint' => 2,
				'null' => false
			),

			// Profile picture URL
			'picture' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			),

			// Profile bio
			'bio' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			),

			// UNIX timestamp of the date the account was created (registration date)
			'registered' => array(
				'type' => 'BIGINT',
				'constraint' => 12,
				'unsigned' => true,
				'null' => false
			),

			// Last login date
			'last_login_date' => array(
				'type' => 'BIGINT',
				'constraint' => 12,
				'unsigned' => true,
				'null' => false
			)
		));

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('email', FALSE);
		$this->dbforge->add_key('first_name', FALSE);
		$this->dbforge->add_key('last_name', FALSE);
		$this->dbforge->create_table('users');
	}

	public function down() {
		$this->dbforge->drop_table('users');
	}

}
