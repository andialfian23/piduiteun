<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>Sign In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sign In Sistem Informasi Piduiteun UNMA">
		<meta name="author" content="Andi Alfian">
		
		<link href="<?= base_url()?>assets/img/unma.png" rel="icon" type="image/x-icon">
		<link href="<?= base_url()?>assets/bootstrap/css/bootstrap.css" rel="stylesheet" >
		<link href="<?= base_url()?>assets/node-waves/waves.min.css" rel="stylesheet" />
		<link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
	</head>
	<body class="login-page" background="<?= base_url()?>assets/img/money.png">	
		<div class="login-box">
			<div class="logo text-center">
				<img src="<?= base_url()?>assets/img/unma.png" width="100px" height="100px">
			</div>
			<div class="card">
				<div class="body">
					<form id="sign_in" method="POST" action="<?= base_url('Login/auth')?>">
						<div class="msg">
							<?php
								if(!$this->session->flashdata('msg')){
									echo 'Masukkan Username dan Password';
								}else{
									echo $this->session->flashdata('msg');
								}
							?>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">person</i>
							</span>
							<div class="form-line">
								<input type="text" class="form-control" name="usercost" placeholder="Username" required='' autofocus=''>
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">lock</i>
							</span>
							<div class="form-line">
								<input type="password" class="form-control" name="passcost" placeholder="Password" required=''>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 p-t-5">
								<input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-green">
								<label for="rememberme">Remember Me</label>
							</div>
							<div class="col-xs-4">
								<button class="btn btn-block bg-green waves-effect" type="submit">SIGN IN</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
		<script src="<?= base_url()?>assets/bootstrap/js/bootstrap.js"></script>
		<script src="<?= base_url()?>assets/node-waves/waves.min.js"></script>
		<script src="<?= base_url()?>assets/js/jquery.validate.js"></script>
		<script src="<?= base_url()?>assets/js/admin.js"></script>
	</body>
</html>