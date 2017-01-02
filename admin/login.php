<?php
session_start();
	$error=''; 
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$connection = mysql_connect("localhost", "root", "");

		$db = mysql_select_db("sekolah", $connection);
		$query = mysql_query("select * from m_admin where username='$username' AND password='$password'");

		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user'] = $username;
			header("location: admin.php");
		} else {
			$error = "Username or Password is invalid!";
		}
			mysql_close($connection);
		}
	}
?>