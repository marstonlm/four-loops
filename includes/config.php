<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
date_default_timezone_set('America/Los_Angeles');

/*
config.php 

A4 Loop configuration info

*/
//prevents data from being sent early
ob_start();


//echo THIS_PAGE;

//die;
// $pagePic = 'images/pade_id.jpg';

  $nav['index.php'] = 'Home';
  $nav['services.php'] = 'Services';
  $nav['portfolio.php'] = 'Portfolio';
  $nav['about.php'] = 'About';
  $nav['contact.php'] = 'Contact';
  

  
switch(THIS_PAGE){
	case 'index.php':
		$title = " A4 Loop";
		$pagePid = '';
		$pageID = 'Welcome';
	break;

	case 'services.php':
		$title = " Services";
		$pagePic = 'images/services_pic.jpg';
		$pageID = 'Services';
	break;

	case 'portfolio.php':
		$title = " Portfolio";
		$pagePic = 'images/portfolio_pic.jpg';
		$pageID = 'Portfolio';
	break;

	case 'about.php':
		$title = " About";
		$pagePic = 'images/about_pic.jpg';
		$pageID = 'About';
	break;


	case 'contact.php':
		$title = " Contact Us";
		$pagePic = 'images/contact_pic.jpg';
		$pageID = 'Contact Us';
	break; 

	case 'disclaimer.php':
		$title = " Disclaimer";
		$pagePic = 'images/contact_pic.jpg';
		$pageID = 'Disclaimer';
	break; 

	default:
		$title = THIS_PAGE;
		$pagePic = 'images/page_id.jpg';
		$pageID = ''; //no icon by default
}


?>