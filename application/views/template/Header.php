<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sangatta Admin</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="<?php echo base_url(). 'assets/img/favicon.ico'?>" type="image/x-icon" />
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/bootstrap.mins.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/bootstrap-responsive.min.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/fullcalendar.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/matrix-style.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/matrix-media.css'?>" />
		<!-- <link rel=""<?php echo base_url(). 'stylesheet" href="assets/css/default.css'?>" /> -->
		<link href=""<?php echo base_url(). 'assets/css/font-awesome.css" rel="stylesheet'?>" />
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/buttons.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/styles.css'?>" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
		<?php if(basename($_SERVER['REQUEST_URI']) == 'dasbor.php?p=dbwp'){echo '<link rel="stylesheet" href="assets/css/select2.css" />'; echo '<link rel="stylesheet" href="assets/css/uniform.css" />'; echo '<link rel="stylesheet" href="assets/css/datatables.css" />';}else { echo ''; } ?>
		<?php if(basename($_SERVER['REQUEST_URI']) == 'tam2.php'){echo '<link rel="stylesheet" href="assets/css/styles.css" />'; }else { echo ''; } ?>
		<script src="<?php echo base_url(). 'assets/js/jquery.min.js'?>"></script>
	</head>
	<body>
		<div id="header">
			<h1><a href="dashboard.html">PBB-P2 KUTAI TIMUR</a></h1>
		</div>
		<div id="user-nav" class="navbar navbar-inverse">
			<ul class="nav">
				<li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome</span><b class="caret"></b></a>
			</li>
			<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Pengaturan</span></a></li>
			<li class=""><a href="<?php echo base_url(). 'login/logout'?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
		</ul>
	</div>