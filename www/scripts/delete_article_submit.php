<?php

include('../../db.php');

$db = new DatabaseManipulator;

$db->MyUpdate("blog_entry", $id);

?>
