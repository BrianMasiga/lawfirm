<?php
session_start();

$userid_log = $_SESSION['userid'];

$connection = mysql_connect('localhost','root','') or die(mysql_error());
$database = mysql_select_db('lawfirm') or die(mysql_error());

try
{
$dbh = new PDO('mysql:host=localhost;dbname=lawfirm', 'root',
'');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
$output = 'Unable to connect to the database server.';
exit();
}

foreach($dbh->query("Select * From tb_users Where userid='$userid_log'") as $result) {
	$profile_pic = $result['photoupload'];
	$firstname_log = $result['firstname'];
	$lastname_log = $result['lastname'];
	$username_log = $result['username'];
}
?>

