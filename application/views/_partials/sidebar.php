<section>
	<aside id="leftsidebar" class="sidebar">
		<div class="user-info">
			<div class="image">
				<img src="<?= base_url()?>assets/img/user.png" width="48" height="48" alt="User" />
			</div>
			<div class="info-container">	
				<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="#"><?= $this->session->userdata('set_name')?></a></div>
			</div>
		</div>
		<div class="menu">
			<ul class="list">
				<li class="header">MAIN MENU</li>
				<li class="active">
					<a href="<?= base_url()?>">
						<i class="material-icons">home</i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="header">TAGIHAN</li>
				<li><a href="<?= base_url('C/tagihan')?>"><i class="material-icons">update</i><span>Histori Tagihan </span></a></li>
				<li><a href="<?= base_url('C/i_tag')?>"><i class="material-icons">control_point</i><span>Tambah Tagihan </span></a></li>
				<li class="header">PEMBAYARAN</li>
				<li><a href="<?= base_url('C/pembayaran')?>"><i class="material-icons">update</i><span>Histori Pembayaran </span></a></li>
				<li><a href="<?= base_url('C/i_pem')?>"><i class="material-icons">control_point</i><span>Tambah Pembayaran </span></a></li>
				<li class="header">LAINNYA</li>
				<li><a href="<?= base_url('Login/logout')?>"><i class="material-icons">input</i><span>Logout</span></a></li>
			</ul>
		</div>
		<div class="legal">
			<div class="copyright">
				&copy; 2020 <a href="javascript:void(0);">Sistem Informasi Piduiteun UNMA</a>.
			</div>
			<div class="version">
				<b>Current Version: </b> 3.4.20.16
			</div>
		</div>
	</aside>
</section>