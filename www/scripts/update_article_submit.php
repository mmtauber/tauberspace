<?php

include('../includes/db.php');

$db = new DatabaseManipulator;
$cols  = "title='" . $_POST['title'] . "', subtitle='" . $_POST['subtitle'] ."',  content='" . $_POST['content'] . "'";
//$id = ?
$db->MyUpdate("blog_entry", $cols, $id);

?>
