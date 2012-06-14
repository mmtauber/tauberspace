<html>
	<title><?php echo $page_title; ?></title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/site.css" />
		<script src="js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
		<script src="js/global.js" type="text/javascript"></script>

	</head>

	<body>
		<div id="top-band"></div>
		<div id="global-container">
			<div id="header"><?php require_once('header.php'); ?></div>
			<div id="main-content">
				<div id="content" class="container" >
					<?php echo $page_main_content; ?>
				</div>
			</div>
			<div id="footer"><?php require_once('footer.php'); ?></div>
			<?php require_once('includes/db.php'); ?>
		</div>
	</body>
</html>
