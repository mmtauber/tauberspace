<?php

$user = $_POST['user'];
$password = $_POST['password'];

if ($user == "test") {
	if ($password ==  "test") {	
		session_register("");
		session_register("");
		header("location:/admin_index.php");
	}
} 

?>
