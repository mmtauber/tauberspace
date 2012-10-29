<?php
include('includes/constants.php');
require_once(DB_PATH);

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
<table>
	<tr>
		<th>
			Id
		</th>
		<th>
			Title
		</th>
		<th>
			Edit
		</th>
		<th>
			Delete
		</th>
	</tr>
<?php while ($row = mysql_fetch_object($list)) { ?>
	<tr>
		<td>
			<?php echo $row->id; ?>
		</td>
		<td>
			<?php echo $row->title; ?>
		</td>
		<td>
			<a href="/editBlogEntry.php?id=<?php echo $row->id; ?>">Edit</a>
		</td>
		<td>
			<a href="/deleteBlogEntry.php?id=<?php echo $row->id ?>">Delete</a>
		</td>	
	</tr>
<?php } ?>
</table>

<?php
	$page_main_content = ob_get_contents();
	ob_end_clean();
	$page_title = 'Tauberspace.com - Admin';
	include('admin_master.php');
?>

