<?php

include('../../cred.php');

$user = $_POST['user'];
$pass = $_POST['password'];

if( crypt($user, $username) == $username) {
	if( crypt($pass, $password) == $password) {	
		session_register("");
		header("location:/admin_index.php");
	}
} 

?>
