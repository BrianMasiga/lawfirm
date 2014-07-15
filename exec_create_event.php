<?php
	$get_pagename = $_GET['redirect_page'];
	require_once('config/connection.php');
	$title = $_POST['title'];
	$details = $_POST['details'];
	$place = $_POST['place'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$visibility = $_POST['visibility'];
  
	$dbh->query("Insert Into tb_events (title, details, place, date, time, firstname, lastname, username, datetime, category, status, visibility) Values ('$title', '$details', '$place', '$date', '$time', '$firstname_log', '$lastname_log', '$username_log', now(), 'Event', 'Add', '$visibility')");
	
	$dbh->exec("INSERT INTO tb_notifications (title, description, firstname, lastname, username, datetime, category, status, visibility) VALUES ('$title', '$details', '$firstname_log', '$lastname_log', '$username_log', now(), 'Event', 'Add', '$visibility')");
	
	header("location: $get_pagename");
?>
