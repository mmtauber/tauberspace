<?php

include('../../db.php');

$db = new DatabaseManipulator;
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];
$cols  = "title, subtitle, content";
$insertContent = "'{$title}', '{$subtitle}', '{$content}'";  
echo $insertContent;
$db->MyInsert("blog_entry",$cols, $insertContent);

?>
