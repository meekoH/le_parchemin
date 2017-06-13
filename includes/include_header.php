<?php
	include_once('includes/include_path.php');
	require_once('lang/'.$lang.'/shared.php');
	// function is_selected($nav) {
	// 	$uri = $_SERVER['REQUEST_URI'];
	// 	$uri = str_replace('/le_parchemin', '', $uri);
	// 	if (strpos($uri, '?') !== FALSE) $uri = substr($uri, 0, strpos($uri, '?'));
	// 	if (strpos($uri, '/en/') !== FALSE) $uri = substr($uri, 3);
	// 	if (strpos($uri, '/fr/') !== FALSE) $uri = substr($uri, 3);
	// 	$selected = false;
	// 	switch ($nav) {
	// 		case 'home':
	// 			if ($uri == '/') $selected = true;
	// 			break;
	// 		default:
	// 			break;
	// 	}
	// 	if ($selected) return ' class="selected"';
	// 	else return '';
	// }

	// Returns English/French version of current URI
	function changeLanguage($language) {
		global $path;
		if ($language == 'en') {
			$other_language = 'fr';
		} else {
			$other_language = 'en';
		}
		if (defined('ERROR404') || defined('HOME')) {
			return $path.$language.'/';
		} else {
			return str_replace('/'.$other_language.'/', '/'.$language.'/', $_SERVER['REQUEST_URI']);
		}
	}
	function toEnglish() {
		return changeLanguage('en');
	}
	function toFrench() {
		return changeLanguage('fr');
	}
?>
<!DOCTYPE HTML>

<html>
    <head>
        <title><?= $title; ?></title>
        <!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Raleway & Judson Font provided by Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Judson:400,400i,700|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

		<meta name="keywords" content="Le Parchemin" />
		<meta name="description" content="For the past 50 years, Le Parchemin Jeweler has been known for its custom designs, made in their workshop, through the expertise of designers, goldsmiths and gemmologists." />

		<meta name="author" content="Evan Paradis" />

		<meta charset="utf-8">

		<link rel='shortcut icon' type='./image/x-icon' href='img/favicon.png' />

		<link rel="stylesheet" type="text/css" href="<?= $path; ?>fancyBox/jquery.fancybox.css" />
		<link rel="stylesheet" type="text/css" href="<?= $path; ?>css/styles.css" />
		<link rel="stylesheet" type="text/css" href="<?= $path; ?>css/owl.carousel.css" />
		<link rel="stylesheet" type="text/css" href="<?= $path; ?>css/owl.theme.css" />
		<link rel="stylesheet" type="text/css" href="<?= $path; ?>css/owl.transitions.css" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    </head>
    <body>
    	<div class="content-wrapper">
	        <?php require_once('components/header.php'); ?>
	        <?php require_once('components/navigation.php'); ?>