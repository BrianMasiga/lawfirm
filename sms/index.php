<?php
$owneremail="elewon_ritse@yahoo.com";
$subacct="ColaSoft";
$subacctpwd="123456s";
$sendto="08080167833"; /* destination number */
$sender="PHP DEMO"; /* sender id */
$message="This is a test"; /* message to be sent */
/* create the required URL */
//$url = "http://www.smslive247.com/http/index.aspx?"
// . "cmd=sendquickmsg"
// . "&owneremail=" . UrlEncode($owneremail)
// . "&subacct=" . UrlEncode($subacct)
// . "&subacctpwd=" . UrlEncode($subacctpwd)
// . "&message=" . UrlEncode($message);
/* call the URL */
$url = "http://www.smslive247.com/http/index.aspx?cmd=sendquickmsg&owneremail=elewon_ritse@yahoo.com&subacct=ColaSoft&subacctpwd=123456s&message=send+from+lawfirm+software&sender=ColaSoft&sendto=09352887840&msgtype=0";
if ($f = @fopen($url, "r"))
{
$answer = fgets($f, 255);
if (substr($answer, 0, 1) == "+")
{
echo "SMS to $dnr was successful.";
}
else
{
echo "an error has occurred: [$answer].";
}
}
else
{
echo "Error: URL could not be opened.";
}
?>