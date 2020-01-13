<?php 
	if(!isset($_SESSION['lang'])){
		$_SESSION['lang']="en";
	}
	else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
		if($_GET['lang'] == "en"){
			$_SESSION['lang'] = "en";
		}
		else if($_GET['lang'] =="kh"){
			$_SESSION['lang'] = "kh";
		}
	}

	include('_config_inc.php'); // Import Config Path
    include(BASE_PATH.'cms/db/home-class.php'); // Import Home Class
    $pk=new Home;
	$base_url=BASE_URL;
	$lang=$_SESSION['lang'];
    $title="Welcom Khmercapital"; 
?>