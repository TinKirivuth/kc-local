<?php
	// Get User Login Information with Session
	session_start();
	if(!isset($_SESSION['userID'])){
			header('Location: login.php');
	}
	$userID=$_SESSION['userID'];
	$userName=$_SESSION['userName'];
	$userPhoto=$_SESSION['userPhoto'];
	$userRole=$_SESSION['userRole'];
	$userIsActive=$_SESSION['userIsActive'];
	$userIsDisable=$_SESSION['userIsDisable'];
	// End Get user information------
?>
<!DOCTYPE html>
<html> 
<head>
	<link rel="icon" href="images/rean-logo.png" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>(_)</title>
	<!-- Link Google Fonts -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Hanuman|Koulen" rel="stylesheet"> -->
	<!-- Bootstrap Style -->
	<link rel="stylesheet" type="text/css" href="style/fontawesome-free-5.3.1-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap/bootstrap.min.css">
	<!-- Personal Style -->
	<link rel="stylesheet" href="style/abcd2.css">
</head>
<body>
