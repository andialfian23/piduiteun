<div class="row clearfix">
	<?php
		foreach($tg as $t){ 
			$sisa = $t->total - $t->dibayar;
	?>
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<div class="info-box bg-blue hover-expand-effect">
			<div class="icon">
				<i class="material-icons">monetization_on</i>
			</div>
			<div class="content">
				<div class="text">TOTAL TAGIHAN</div>				
				<div class="number">Rp <?= number_format($t->total)?></div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<div class="info-box bg-green hover-expand-effect">
			<div class="icon">
				<i class="material-icons">monetization_on</i>
			</div>
			<div class="content">
				<div class="text">TOTAL DIBAYAR</div>
				<div class="number">Rp <?= number_format($t->dibayar)?></div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<div class="info-box bg-red hover-expand-effect">
			<div class="icon">
				<i class="material-icons">monetization_on</i>
			</div>
			<div class="content">
				<div class="text">TOTAL BELUM DIBAYAR</div>
				<div class="number">Rp <?= number_format($sisa)?></div>
			</div>
		</div>
	</div>
	
					<?php } ?>
</div>

<div class="row-clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Grafik Pengeluaran per-Bulan</h2>
			</div>
			<div class="body">
				<canvas id="line_chart" height="100"></canvas>
				<script>	
					function getChartJs(type) {
						var config = null;
						config = { type: 'line', data: {
								labels: [
									<?php
										$no1 = 0;
										$no2 = 0;
										foreach($pn as $t){
											if($no1>='1'){
												echo ',';
											}
											echo '"'.tanggal($t->tg).'"'; 
											$no1++;
										}
									?>
								],
								datasets: [{
									label: "Total Pengeluaran ",
									data: [
									<?php
										foreach($pn as $t){
											if($no2>='1'){
												echo ',';
											}
											echo '"'.$t->bayar.'"'; 
											$no2++;
										}
									?>						],
									borderColor: 'green',
									backgroundColor: 'rgba(30, 233, 99, 0.3)',
									pointBorderColor: 'rgba(233, 30, 99, 0)',
									pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
									pointBorderWidth: 1
								}]
							},
							options: { responsive: true, legend: true }
						}
						return config;
					}
				</script>
			</div>
		</div>
	</div>
</div>	

<div class="row-clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>Grafik Pengeluaran per-Semester</h2>
			</div>
			<div class="body">
				<canvas id="bar_chart" height="100"></canvas>
				<script>	
					function getChartJs2(type) {
						var config2 = null;
						config2 = { type: 'bar', data: {
								labels: [
									<?php
										$no3 = 0;
										$no4 = 0;
										foreach($ps as $u){
											if($no3>='1'){
												echo ',';
											}
											echo '"Semester '.$u->sem.'"'; 
											$no3++;
										}
									?>
								],
								datasets: [{
									label: "Total Pengeluaran ",
									data: [
									<?php
										foreach($ps as $u){
											if($no4>='1'){
												echo ',';
											}
											echo '"'.$u->bayar.'"'; 
											$no4++;
										}
									?>
									],
									borderColor: 'green',
									backgroundColor: 'rgba(30, 233, 99)',
									pointBorderColor: 'rgba(233, 30, 99, 0)',
									pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
									pointBorderWidth: 1
								}]
							},
							options: { responsive: true, legend: true }
						}
						return config2;
					}
				</script>
			</div>
		</div>
	</div>
</div>		