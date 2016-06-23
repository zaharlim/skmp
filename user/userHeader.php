<?php
session_start(); // Starting Session
include '../database.php';
?>
<!DOCTYPE HTML>

<!--
	Minimaxing by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sistem Keluar Masuk Pelajar</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/css/jquery-ui.css" />
		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/jquery-ui.js"></script>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<script>
$(function()
   {
   $("#datepicker").datepicker({
	altField  : '#alt-datepicker',
    altFormat : 'yy-mm-dd',
	dateFormat    : 'dd/mm/yy',
   beforeShowDay:
     function(dt)
     {
        return [dt.getDay() == 5 || dt.getDay() == 6 || dt.getDay() == 0, ""];
     }
   })
 });
  </script>
	</head>
