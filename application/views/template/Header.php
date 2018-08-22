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
		<link href="<?php echo base_url(). 'assets/css/font-awesome.css" rel="stylesheet'?>" />
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/buttons.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/styles.css'?>" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
		<script src="<?php echo base_url(). 'assets/js/jquery.min.js'?>"></script>
	</head>
	<body>
		<div id="header">
			<h1><a href="<?php echo base_url(). 'Dashboard'?>">PBB-P2 KUTAI TIMUR</a></h1>
		</div>
		<div id="user-nav" class="navbar navbar-inverse">
			<ul class="nav">
				<li id="profile-messages"><a title="" href="#" data-target="#profile-messages"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo $this->session->userdata('nama_u');?></span><b class="caret"></b></a>
			</li>
			<li class=""><a href="<?php echo base_url(). 'login/logout'?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
		</ul>
	</div>