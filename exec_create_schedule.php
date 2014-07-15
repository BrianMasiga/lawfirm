<?php
	$get_pagename = $_GET['redirect_page'];
	require_once('config/connection.php');
	$title = $_POST['title'];
	$details = $_POST['details'];
	$court = $_POST['court'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$visibility = $_POST['visibility'];
  
	$dbh->query("Insert Into tb_schedule (title, details, court, date, time, firstname, lastname, username, datetime, category, status, visibility) Values ('$title', '$details', '$court', '$date', '$time', '$firstname_log', '$lastname_log', '$username_log', now(), 'Schedule', 'Add', '$visibility')");
	
	$dbh->exec("INSERT INTO tb_notifications (title, description, firstname, lastname, username, datetime, category, status, visibility) VALUES ('$title', '$details', '$firstname_log', '$lastname_log', '$username_log', now(), 'Schedule', 'Add', '$visibility')");
	
	header("location: $get_pagename");
?>
