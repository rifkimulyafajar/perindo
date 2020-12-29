<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- LINEARICONS -->
	<link rel="stylesheet" href="<?php echo base_url('asset/register/fonts/linearicons/style.css') ?>">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?php echo base_url('asset/register/css/style.css') ?>">
</head>

<body>


	<div class="wrapper">
		<div class="inner">
			<?= form_open('Register/proses_register') ?>
			<form method="post">
				<img src="<?php echo base_url('asset/register/images/image-1.png'); ?>" alt="" class="image-1">
				<form action="">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
						<p> <?php echo form_error('nama'); ?> </p>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" name="umur" id="umur" placeholder="Umur">
						<span class="focus-input100"></span>
						<p> <?php echo form_error('umur'); ?> </p>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<p> <?php echo form_error('email'); ?> </p>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
						<p> <?php echo form_error('username'); ?> </p>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name=" password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<p> <?php echo form_error('password'); ?> </p>
					</div>
					<!-- <div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password">
					</div> -->
					<div class="form-holder">
						<span></span>
						<a href="<?php echo base_url('login'); ?>">Login?</a>
					</div>
					<button>
						<span>Register</span>
					</button>
				</form>
				<img src="<?php echo base_url('asset/register/images/image-2.png'); ?>" alt="" class="image-2">
				<?= form_close(); ?>
		</div>

	</div>

	<script src="<?php echo base_url('asset/register/js/jquery-3.3.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('asset/register/js/main.js'); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>