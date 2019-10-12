<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// Show user profile or redirect to login page
	public function index() {
		if (empty($_SESSION['logged_in'])) {
			redirect("/user/login");
			return;
		}
		$header_data = array();
		$data = array();



		$header_data["title"] = $_SESSION["first_name"] . " " . $_SESSION["last_name"];
		$this->load->view("header", $header_data);
		$this->load->view("user/profile", $data);
		$this->load->view("footer");
	}

	public function captcha() {
		if (empty($_SESSION)) {
			redirect("/user");
			return;
		}

		// TODO: Help prevent spam
		//usleep(1000000);

		$_SESSION['captcha_cache'] = substr(md5(rand(1000,9999)), 0, 6);
		// Create a blank image and add some text
		$im = imagecreatetruecolor(58, 18);
		$bg = imagecolorallocatealpha($im, 0, 0, 0, 75); // BG color
		imagecolortransparent($im, $bg); // set BG
		$line_color = imagecolorallocate($im, rand(80,255), rand(80,255), rand(80,255)); // Set line color
		$line_color2 = imagecolorallocate($im, rand(80,255), rand(80,255), rand(80,255)); // Set line color 2
		$text_color = imagecolorallocate($im, rand(0,150), rand(0,150), rand(0,150)); // Set Text color

		imageline($im, 0, rand(0,16), 58, rand(0,16), $line_color); // Draw line with line color
		imageline($im, 0, rand(0,16), 58, rand(0,16), $line_color2); // Draw line with line color 2
		imageline($im, 0, rand(0,16), 40, rand(0,16), $text_color); // Draw line with text color

		imagestring($im, 5, 2, 0,  $_SESSION['captcha_cache'], $text_color); // Render text

		// Set the content type header to image/png
		header('Content-Type: image/png');

		// Output the image
		imagepng($im);

		// Free up memory
		imagedestroy($im);
	}

	private function show_login($body_data=array()) {
		$header_data = array();
		$header_data["title"] = "Login";

		$body_data["csrf_token"] = gen_csrf_token();
		$this->load->view("header", $header_data);
		$this->load->view("user/login", $body_data);
		$this->load->view("footer");
	}

	// Local login page
	public function login() {
		if (!empty($_SESSION['logged_in'])) {
			redirect("/user");
			return;
		}
		if ($this->config->item("enable_instructure", "club")) {
			redirect($this->config->item("instructure_login"));
			return;
		}

		$data = array();

		// Sent login POST
		if (!empty($_POST)) {
			if (!empty($_POST['csrf_token'])) {
				if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
					$data["error_message"] = "Invalid CSRF token, try again.";
					$this->show_login($data);
					return;
				}
				if (!empty($this->config->item("admin_password", "club"))) {
					if ($_POST['email'] == "admin") {
						if ($_POST['password'] === $this->config->item("admin_password", "club")) {
							// Do admin login
							$_SESSION['logged_in'] = true;
							$_SESSION['email'] = "admin@localhost.local";
							$_SESSION['first_name'] = "admin";
							$_SESSION['last_name'] = "";
							$_SESSION['permission'] = 128;
							$_SESSION['permission_name'] = "Administrator";
							redirect("/user");
							return;
						}
						$data["error_message"] = "Incorrect administrator password.";
						$this->show_login($data);
						return;
					}
				}
				if (strlen($_POST['email']) > 100 || strlen($_POST['email'] < 4)) {
					$data["error_message"] = "Invalid email address provided.";
					$this->show_login($data);
					return;
				}

			}
			$data["error_message"] = "Invalid CSRF token, try again.";
			$this->show_login($data);
			return;
		}

		$this->show_login($data);
	}

	// OAuth2 token authentication redirection point
	public function oauth2login() {
		// TODO: Authenticate user & match schema

		// GET data
		var_dump($_GET);

		// POST data
		var_dump($_POST);

	}

	// OAuth2 token de-authentication / Local logout page
	public function logout() {
		if (empty($_SESSION['logged_in'])) {
			redirect("/user/login");
			return;
		}

		if ($this->config->item("enable_instructure", "club")) {
			// TODO: Deauth via redirect or CURL ?
			// $this->config->item("instructure_logout", "club");
		}

		// Destroy the local session
		session_destroy();
		unset($_SESSION);
		$_SESSION = null;
		redirect("/user/login");
	}






}
