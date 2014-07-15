<?php
	$get_pagename = $_GET['redirect_page'];
	require_once('config/connection.php');
	$editid = $_POST['editid'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phoneno = $_POST['phoneno'];
	$bdate = $_POST['bdate'];
	$address = $_POST['address'];
  
	$query = "UPDATE tb_users 
						SET 
					firstname=?, 
					middlename=?,
					lastname=?, 
					email=?,
					phoneno=?,
					birthdate=?,
					contactaddress=? WHERE userid=?";
	$query_update = $dbh->prepare($query);
	//execute query
	$query_update->execute(array($firstname, $middlename, $lastname, $email, $phoneno, $bdate, $address, $editid));
	
	//$dbh->exec("INSERT INTO tb_notifications (title, description, firstname, lastname, username, datetime, category, status, visibility) VALUES ('$title', '$details', '$firstname_log', '$lastname_log', '$username_log', now(), 'Event', 'Add', '$visibility')");
	
	header("location: $get_pagename");
?>