<?php

$user = $_POST['user'];
$password = $_POST['password'];

if ($user == "test") {
	if ($password ==  "test") {	
		session_register("tallbikejoust");
		session_register("packback102938");
		header("location:/admin_index.php");
	}
} 

?>
