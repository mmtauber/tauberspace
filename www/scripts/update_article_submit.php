<?php

include('../../db.php');

$db = new DatabaseManipulator;
$cols  = "title='" . 	   $_POST['title'] . 
		 "', subtitle='" . $_POST['subtitle'] .
		 "',  content='" . $_POST['content'] .
		 "',  active='" . $_POST['active'] . "'";

$db->MyUpdate("blog_entry", $cols, $id);

?>
