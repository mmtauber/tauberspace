<?php

include('../../db.php');

$db = new DatabaseManipulator;
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];
$active = true;
$cols  = "title, subtitle, content, active";
$insertContent = "'{$title}', '{$subtitle}', '{$content}', '{$active}'";  
echo $insertContent;
$db->MyInsert("blog_entry", $cols, $insertContent);
header("location:/admin_index.php");

?>
