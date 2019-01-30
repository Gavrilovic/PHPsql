<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include ("dbconn.php");
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	# Classes & Functions
    include_once("functions.php");
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<title>NK TUROPOLJE</title>
	</head>
<body>
	<header>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		
	# Homepage
	if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); }
	
	# News
	else if ($_GET['menu'] == 2) { include("news.php"); }
	
	# Contact
	else if ($_GET['menu'] == 3) { include("contact.php"); }
	
	# About us
	else if ($_GET['menu'] == 4) { include("onama.php"); }
	
	# Register
	else if ($menu == 5) { include("register.php"); }
	
	# Signin
	else if ($menu == 6) { include("signin.php"); }
	
	print '
	<h1>NK TUROPOLJE</h1>
		<figure>
			<img src="Turopolje.jpg" alt="turopolje" title="Turopolje">
			<figcaption>NK Turopolje hrvatski je nogometni klub sa sjedi系em u Turopolju kraj Velike Gorice.</figcaption>
		</figure>
		<p>NK Turopolje hrvatski je nogometni klub sa sjedi系em u Turopolju kraj Velike Gorice.</p>
        <p>Osnovan je 1924. godine pod nazivom Nogometni klub Proleter.</p>
        <p>Svoje domace utakmice igra na igrali系u Le系ant u Turopolju. </p>
        <p>Klub je u sezoni 2014./2015. osvojio prvo mjesto i izborio natjecanje u 1. 就L - istok nakon tri godine.</p>
        <br></br>
        <p>Social media:<br>
			<a href="linkedin.com" target="_blank"><img src="linkedin.png" alt="Linkedin" title="Linkedin" style="width:24px; margin-top:0.4em"></a>
			<a href="twitter.com" target="_blank"><img src="http://communicasound.com/wp-content/uploads/2017/02/Twitter-Logo-PNG-1.png" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
			<a href="google.com" target="_blank"><img src="https://www.lifewire.com/thmb/IH_l1QnIcFddCFuviMJ7UuRJfko=/768x0/filters:no_upscale():max_bytes(150000):strip_icc()/google-plus-57d9e4d53df78c9cceedc5e1.png" alt="Google+" title="Google+" style="width:24px; margin-top:0.4em"></a>
		</p>
	</main>
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Ivan Gavrilovic . <a href="github.com">Github</p>
	</footer>
</body>
</html>';
?>