<div class="card col-lg-8">
	<div class="body">
		<form class="form-horizontal" ACTION="<?php echo base_url().'C/p_i_pem'; ?>" METHOD="POST">
			<div class="row clearfix">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
					<label for="nt">Nama Tagihan</label>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
					<div class="form-group">
						<div class="form-line">
							<select id="nt" name="nt" class="form-control">
								<?php
									$tag = $this->mydb->v_tag_bl()->result();
									foreach($tag as $t){
								?>
								<option value="<?= $t->no_tag?>"><?= $t->nama_tag?> | Total Rp <?= number_format($t->total)?> | Sisa Rp <?= number_format($t->total-$t->dibayar)?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
					<label for="tb">Total Bayar</label>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="form-group">
						<div class="form-line">
							<input id="tb" class="form-control" type="text" name="tb" />
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
					<label for="tgl">Tanggal</label>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<div class="form-group">
						<div class="form-line">
							<input id="tgl" class="form-control" type="date" name="tgl" />
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-4 col-xs-offset-4">
					<input type="submit" class="btn btn-primary"  name="Input" value="Simpan">
				</div>
			</div>
		</form>
	</div>
</div>