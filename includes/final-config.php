<?
/*
portal-config.php 

Use to store all of our IT 162 configuration info

*/
//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;
// $pagePic = 'images/pade_id.jpg';

switch(THIS_PAGE){
	case 'index.php':
		$title = " A4 Loop";
		$pagePid = '';
		$pageID = ' ';
	break;

	case 'services.php':
		$title = " Services";
		$pagePic = 'images/services_pic.jpg';
		$pageID = 'Services';
	break;

	case 'software.php':
		$title = " Software";
		$pagePic = 'images/software_pic.jpg';
		$pageID = 'Software';
	break;

	case 'mobile.php':
		$title = " Mobile Apps";
		$pagePic = 'images/mobile_pic.jpg';
		$pageID = 'Mobile Apps';
	break;

	case 'database.php':
		$title = " Database";
		$pagePic = 'images/database_pic.jpg';
		$pageID = 'Database';
	break;

	case 'portfolio.php':
		$title = " Portfolio";
		$pagePic = 'images/portfolio_pic.jpg';
		$pageID = 'Portfolio';
	break;

	case 'about.php':
		$title = " about";
		$pagePic = 'images/about_pic.jpg';
		$pageID = 'About';
	break;

	case 'ourstory.php':
		$title = " Our Story";
		$pagePic = 'images/ourstory_pic.jpg';
		$pageID = 'Our Story';
	break;

	case 'team.php':
		$title = " The Team";
		$pagePic = 'images/team_pic.jpg';
		$pageID = 'The Team';
	break;

	case 'career.php':
		$title = " Careers";
		$pagePic = 'images/careers_pic.jpg';
		$pageID = 'Career Oppertunities';
	break;

	case 'blog.php':
		$title = "Blog";
		$pagePic = 'images/blog_pic.jpg';
		$pageID = 'Blog';
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