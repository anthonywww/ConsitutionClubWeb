<?php
if (!function_exists('getallheaders')) {
	function getallheaders() {
		$headers = [];
		foreach ($_SERVER as $name => $value) {
			if (substr($name, 0, 5) == 'HTTP_') {
				$headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
			}
		}
		return $headers;
	}
}

function starts_with($needle, $haystack) {
	$length = strlen($needle);
	return (substr($haystack, 0, $length) === $needle);
}

function ends_with($needle, $haystack) {
	$length = strlen($needle);
	return $length === 0 || (substr($haystack, -$length) === $needle);
}

function get_client_ip() {
	$ip = "0.0.0.0";
	if (!empty($_SERVER['REMOTE_ADDR'])) {
		$ip = $_SERVER['REMOTE_ADDR'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	return $ip;
}

function gen_csrf_token() {
	$token = hash("sha1", bin2hex(random_bytes(32)));
	$_SESSION['csrf_token'] = $token;
	return $token;
}
