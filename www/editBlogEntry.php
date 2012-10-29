<?php
include('../db.php');

$blogEntryId = $_GET['id'];
$db = new DatabaseManipulator;
$result = $db->MyFind("blog_entry", $blogEntryId);

$entry = mysql_fetch_object($result);

ob_start();
?>

<form  method="post" action="scripts/update_article_submit.php">
	<p><label>Title:</label>
	<input name="title" type="text" value="<?php echo $entry->title ?>" /></p>
	<p><label>Day of Week, date, location:</label>
	<input name="subtitle" type="text" value="<?php echo $entry->subtitle ?>" /></p>
	<p><label>Content:</label>
	<input name="content" type="text" value="<?php echo $entry->content ?>" /></p>
	<input name="active" type="checkbox" checked="<?php echo $entry->active ?>" value="active" /></p>
	<input type="submit" />
</form>

<?php 
	$page_main_content = ob_get_contents();
	ob_end_clean();
	$page_title = 'Tauberspace.com - Admin: Edit Blog Entry';
	include('admin_master.php');
?>

