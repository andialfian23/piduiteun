<div class="card col-lg-8 col-md-10 col-sm-12 col-xs-12">
	<div class="body">
		<form class="form-horizontal" ACTION="<?php echo base_url().'C/p_i_tagihan'; ?>" METHOD="POST">
			<div class="row clearfix">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
					<label for="nt">Nama Tagihan</label>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="nt" class="form-control" name="nt" autofocus="" required="">
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
					<label for="s">Semester</label>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<div class="form-group">
						<div class="form-line">
							<select id="s" name="sem" class="form-control">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
					<label for="tt">Total Tagihan</label>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="form-group">
						<div class="form-line">
							<input id="tt" class="form-control" type="text" name="tt" />
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