<!-- Breadcrumbs-->
<?php if(!$this->uri->segment(2)){ ?>
	<div class="block-header">
	<h2>DASHBOARD</h2>
	</div>
<?php }else{ ?>
<ol class="breadcrumb breadcrumb-col-green">
	<li>
		<a href="<?= base_url()?>">
			<i class="material-icons">home</i> Dashboard
		</a>
	</li>
	<li class="active">
		<i class="material-icons">library_books</i> <?= $title?>
	</li>
</ol>
<?php } ?>