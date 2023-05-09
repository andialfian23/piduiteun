<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $this->load->view("_partials/head.php") ?>
	</head>
	<body class="theme-green">
		<div class="page-loader-wrapper">
			<div class="loader">
				<div class="preloader">
					<div class="spinner-layer pl-green">
						<div class="circle-clipper left">
							<div class="circle"></div>
						</div>
						<div class="circle-clipper right">
							<div class="circle"></div>
						</div>
					</div>
				</div>
				<h2>Ke tungguan ...</h2>
			</div>
		</div>
		<div class="overlay"></div>
		
		<?php $this->load->view("_partials/navbar.php") ?>
		
		<?php $this->load->view("_partials/sidebar.php") ?>
		
		<section class="content">
			<div class="container-fluid">
				<div ng-view>
				<?php include"tanggal.php";?>
				<?php $this->load->view("_partials/breadcrumb.php") ?>