<?php
include('includes/db.php');

$blogEntryId = $_GET('id');
echo $blogEntryId;
$db = new DatabaseManipulator;
$list = $db->MyList("blog_entry");

ob_start();
?>

<form  method="post" action="scripts/new_article_submit.php">

	<p><label>Title:</label>
	<input name="title" type="text" /></p>
	<p><label>Day of Week, date, location:</label>
	<input name="subtitle" type="text" /></p>
	<p><label>Content:</label>
	<input name="content" type="text"  /></p>
	<input type="submit" />
</form>

<?php 
	$page_main_content = ob_get_contents();
	ob_end_clean();
	$page_title = 'Tauberspace.com - Admin: Edit Blog Entry';
	include('admin_master.php');
?>

