<?php
$secret = "I'm a secret!"; // Make sure you change this before deploying a website…

$public = true;


switch($_SERVER['REQUEST_URI'])
{
	
	// All the pages of the website go here
	
	case '/':
		$page = 'home';
		break;
	
	
	
	case '/awesomepage':		// Requested URL
		$page = 'awesomepage';	// Name of the page in your content file
		break;
		

	
	// Can also create redirects for old pages, etc.
	case '/old':
		header("Location: /new");
		die();
		break;
	
	
	
	
	
	
	
	// Change this to a secret password to give to clients to
	// let the access the site and watch development
	case '/supersecretpassword':
		setcookie('auth', md5($secret), time()+60*60*24*90);
		header("Location: /");
		die();
		break;
	
	// This also lets you setup Google analytics to track the client!
	// (so you can tell if anyone else ever actually visits the website!)
	// You could setup a separate one if you wanted to track yourself separately
	
	
	
	
	
	
	// Serve a 404 page if some other URL is requested
	default:
		header("HTTP/1.0 404 Not Found");
		$page = '404'; // Make sure you have a 404 page in the content file!
		break;
	
}


if(!$public && $_COOKIE['auth'] !== md5($secret))
{
	include('includes/locked.php');	// Display another page for unauthorised vists
	die();
}


// Indlude the content file
include('includes/content.php');


// Include the template file (which will output the whole page)
include('includes/template.php');

?>