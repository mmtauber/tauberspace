<?php
	include('includes/constants.php');

	session_start();
	if(!session_is_registered("tallbikejoust")){
		echo "Access denied!";
	}
	else {
?>
<html>
	<title><?php echo $page_title; ?></title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/site.css" />
		<script src="js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
		<script src="js/global.js" type="text/javascript"></script>
	</head>

	<body style="background-image: none;" >
		<div id="global-container">
			<a href="/scripts/logout_script.php">logout</a>
			<div id="main-content">
				<div id="content" class="container" >
					<?php echo $page_main_content; ?>
				</div>
			</div>
			<?php require_once(DB_PATH); ?>
		</div>
	</body>
</html>
<?php
	}	
?>
