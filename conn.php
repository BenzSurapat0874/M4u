<?
$hostname = "localhost";
$dbUser = "root"; 
$dbPass = "123456789";
$dbName = "e-commerce";

$connent = new PDO("mysql:host=$hostname;dbname=$dbName", $dbUser, $dbPass);
if (!($link=mysql_connect($hostname, $dbUser, $dbPass))) {
	echo "Cannot Connection<BR>";
	error_log(mysql_error(), 3, “/tmp/phplog.err”);
}
if (!mysql_select_db($dbName, $link)) {
	echo "Cannot Open<BR>";
	error_log(mysql_error(), 3, “/tmp/phplog.err”);
}


?>