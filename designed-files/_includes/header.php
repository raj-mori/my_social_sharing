<!DOCTYPE html>
<html>
	<head>
		<title><?= $title ?></title>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		
		<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon">
		
		<link rel="stylesheet" href="/_css/styles.css" type="text/css">
		<link rel="stylesheet" href="/_css/responsive.css" type="text/css">
		<!--[if IE 8]>
		<link rel="stylesheet" href="/_css/ie8.css" type="text/css">
		<![endif]-->
		<link rel="stylesheet" href="/_fonts/css/font-awesome.min.css" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>	
	</head>
	<!-- 
		Changes inline body background based off of variable at top of pages.
		If $body_background is empty then make the background a solid white.
	-->
	<!--[if !IE]><!-->
	<body>
 	<!--<![endif]-->
		<?php
			if ($body_background==null) {
				echo '
	<!--[if IE 8]><body style="background-color: #fff"><![endif]-->
		<div id="background" style="background-color: #fff">'; } 
			else { 
				echo '
	<!--[if IE 8]> <body style="background: url(\''. $body_background .'\') fixed;"><![endif]-->
		<div id="background" style="background-image: url(\''. $body_background .'\');">'; }
		?>
		</div>

		<!-- Top Header Section -->
		<div id="header-wrapper">
			<div class="header">
				<!-- 
					<div class="user_login_block">
					<a href='#' class="fa fa-user"><span class="header-text">Login</span> </a>
				</div> -->
				<ul class="user-menu">
					<li>
						<a href="" class="fa fa-user"><span class="header-text">Diddy182</span> <span class="fa fa-caret-down"></span></a>
						<ul>
							<li><a href="/board.php" class="fa fa-list-alt">Home</a></li>
							<li><a href="" class="fa fa-plus">Create Board</a></li>
							<li><a href="/user.php" class="fa fa-cogs">My settings</a></li>
							<li><a href="" class="fa fa-power-off">Log Out</a></li>
						</ul>
					</li>
				</ul>	

				<div class="main_logo">
					<h1><a href="http://www.webspasm.com/" title="The Backbone of the Internet!"><img src="_images/logo.png" alt="Logo"></a></h1>
				</div>

				<div class="search_explore_block">
					<a href='/explore.php' class="fa fa-search"><span class="header-text">Explore</span> </a>
				</div>
			</div><!-- End .header-->  
		</div><!--End of Header Wrapper-->
			
			<!--End of Top Header Section-->