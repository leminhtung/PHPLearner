<?php
session_start();
$db_name = "test";
$mysql_user = "root";
$mysql_password = "";
$server_name = "localhost";
$error = '';

$conn = mysql_connect($server_name, $mysql_user, $mysql_password);
mysql_select_db($db_name);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	$sql = mysql_query("select * from admin where username = '$username' and password = '$password'", $conn) or die ("fail to query".mysql_error());
	$count = mysql_num_rows($sql);

	if($count == 1){
		$_SESSION['username'] = $username;
		header("location: mainpage.php");

	}else{
		echo "Account invalid";
	}
}
?>