<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?php echo base_url()?>assets/images/favicon_1.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<form action="<?php echo site_url('Home/login')?>" method="post">
						<div class="card-body">
							<?php if($msg != NULL){?><span style="text-align: center; background-color: rgba(231,177,178,1.00)"><code><?php echo $msg ;}?></code></span>
							<?php if($msg == "We will miss you"){?><span style='color:rgba(1,60,60,0.43); text-align: center; background-color: aquamarine; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif''> <?php echo $msg;}?></span>
							<img src="<?php echo base_url()?>assets/images/GCS Logo-01.png" alt="" class="img-fluid mb-4">
							<h4 class="mb-3 f-w-400">Signin</h4>
							<div class="form-group mb-3">
								<label class="floating-label" for="Email">Email address</label>
								<input name="email" type="text" class="form-control" id="Email" placeholder="">
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input name="password" type="password" class="form-control" id="Password" placeholder="">
							</div>
							<button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?php echo base_url()?>assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/ripple.js"></script>
<script src="<?php echo base_url()?>assets/js/pcoded.min.js"></script>



</body>

</html>
