<?php

$user = $_POST['user'];
$pass = $_POST['password'];

if( $user == "tallbikejoust") {
	if( $pass == "packback102938") {	
		session_register("");
		header("location:/admin_index.php");
	}
} 

?>
