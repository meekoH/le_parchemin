<?php
die('test');
	// THIS FILE CONTROLS URL-TO-PAGE MAPPING
// 	require_once('includes/include_path.php');
// 	$uri = $_SERVER['REQUEST_URI'];

// 	function output404() {
// 		global $path, $langpath;
// 		header("HTTP/1.0 404 Not Found");
// 		include('_404.php');
// 		die();
// 	}

// 	// If domain doesn't match, redirect to the domain (removes www. subdomain)
// 	if ($_SERVER['HTTP_HOST'] != $domain) {
// 		header("Location: " . $protocol . $domain . $uri, TRUE, 301); die();
// 	}

// 	// If $root path does not exist in URI, just error out
// 	if (strpos($uri, $root) !== 0) { // Make sure $root is defined properly in include_path.php
// 		output404();
// 	} else {

// 		// Check for valid URI
// 		$uri = substr($uri, strlen($root));
// 		if ($uri == '') {
// 			header("Location: en/", TRUE, 301); die();
// 		} else {

// 			// Isolate query string
// 			$query = '';
// 			if (strpos($uri, '?') !== FALSE) {
// 				$query = substr($uri, strpos($uri, '?'));
// 				$uri = substr($uri, 0, strpos($uri, '?'));
// 			}

// 			// Check for language folder
// 			if ($uri == 'en') {
// 				header("Location: en/", TRUE, 301); die();
// 			} else if ($uri == 'fr') {
// 				header("Location: fr/", TRUE, 301); die();
// 			} else if ($uri == 'en/' || $uri == 'fr/') {
// 				include_once('_home.php'); die();
// 			} else if (strpos($uri, 'en/') === 0 || strpos($uri, 'fr/') === 0) {

// 				// Check for filename
// 				$uri = substr($uri, 3);

				
// 				if (strpos($uri, '_') !== FALSE) {
// 					output404();
// 				} else if (file_exists($uri . '.php')) {
// 					include($uri . '.php'); die();
// 				} else {
// 					output404();
// 				}

// 			} else {
// 				output404();
// 			}
// 		}
// 	}
// ?>