<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- LINEARICONS -->
	<link rel="stylesheet" href="<?php echo base_url('asset/register/fonts/linearicons/style.css') ?>">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?php echo base_url('asset/register/css/style.css') ?>">
</head>

<body>

	<div class="wrapper">
		<?php if (validation_errors()) : ?>
			<div class="alert alert-danger" role="alert">
				<?php echo validation_errors(); ?>
			</div>
		<?php endif; ?>
		<div class="inner">
			<?= form_open('login/proses_login') ?>
			<img src="<?php echo base_url('asset/register/images/img-1.png'); ?>" alt="" class="image-1">
			<div class="text-center">
				<img src="<?php echo base_url('asset/user/img/logo2.png'); ?>" width="300px" height="90px"> <br><br>
			</div>
			<h3>Login Admin</h3>
			<div class="form-holder">
				<span class="lnr lnr-user"></span>
				<input type="text" class="form-control" name='uname1' placeholder="Username" data-validate="Username is required">
			</div>
			<div class="form-holder">
				<span class="lnr lnr-lock"></span>
				<input type="password" class="form-control" name='pwd1' placeholder="Password" data-validate="Password is required">
			</div>
			<button>
				<span>Login</span>
			</button>
			<br>
			<div class="alert alert-danger fade in" role="alert">
				<?php
				if (isset($pesan)) {
					echo $pesan;
				} else {
					echo "Masukkan Username Dan Password Anda";
				}
				?>
			</div>

			<?= form_close(); ?>
		</div>
	</div>


	<script src="<?php echo base_url('asset/register/js/jquery-3.3.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('asset/register/js/main.js'); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>