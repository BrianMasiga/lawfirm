<?php
include 'config/connection.php';

//For user activity query
$dbh->query("Insert Into tb_useractivity (username, activity, datetime) Values ('$username_log', 'Logout to the system', now())");

session_destroy();
unset($_SESSION['userid']);
unset($_SESSION['username']);
echo '<script type="text/javascript">window.location = "index.php"; </script>';
?>