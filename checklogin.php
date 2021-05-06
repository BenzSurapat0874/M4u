<?php require_once('conn.php'); ?>
<?php
session_start();
$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."'

and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";

$objQuery = mysql_query($strSQL);

$objResult = mysql_fetch_array($objQuery);

if(!$objResult)
	{
	echo "<script>alert('Username and Password Incorrect!');</script>";
	echo "<script>window.location='admin-login.php'</script>";
}
else{

$_SESSION["UserID"] = $objResult["UserID"];
$_SESSION['Username'] = $objResult["Username"];
$_SESSION['status'] = $objResult["Status"];


	


session_write_close();


if($objResult["Status"] == "ADMIN")

{
		
		echo "<script>window.location='index.php'</script>";



}

else {
	
		echo "<script>window.location='index.php'</script>";
	
	
}

}




?>