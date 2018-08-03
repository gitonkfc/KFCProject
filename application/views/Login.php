<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BUAYASAGATTA</title>
		<!-- Bootstrap css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/default.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			
			<div class="row" id="pwd-container">
				<div class="col-md-4"></div>
				
				<div class="col-md-4">
					<section class="login-form">
						<form class="form-signin" method="post" action="<?php echo base_url().'index.php/login/auth'?>" role="login">
							<img src="assets/img/kutai_timur.png" class="img-fluid" alt="Kutai Timur" />
							<center><h4>PBB-P2 KUTAI TIMUR</h4></center>
							<input type="text" name="username" class="form-control input-lg" placeholder="Username" required oninvalid="this.setCustomValidity('Isi dengan username yang diberikan')" oninput="setCustomValidity('')" />
							
							<input type="password" class="form-control input-lg" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('Isi dengan password yang diberikan')" oninput="setCustomValidity('')" />
							<!-- Error report -->
							<?php echo $this->session->flashdata('msg');?>
							<!-- End-Error report -->
							<button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
							
						</form>
					</section>
				</div>
				<div class="col-md-4"></div>
				
			</div>
		</div>
		<script src="Assets/js/jquery-3.2.1.min.js"></script>
		<script src="Assets/js/bootstrap.min.js"></script>
	</body>
</html>