<?php
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

$connection = mysql_connect('localhost','root','') or die(mysql_error());
$database = mysql_select_db('lawfirm') or die(mysql_error());
?>