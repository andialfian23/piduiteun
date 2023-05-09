<div class="card">
	<div class="body">
		<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Tagihan</th>
					<th>Semester</th>
					<th>Total Tagihan</th>
					<th>Dibayar</th>
					<th>Sisa Tagihan</th>
					<th>Tanggal Bayar</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>No</th>
					<th>Nama Tagihan</th>
					<th>Semester</th>
					<th>Total Tagihan</th>
					<th>Dibayar</th>
					<th>Sisa Tagihan</th>
					<th>Tanggal Bayar</th>
				</tr>
			</tfoot>
			<tbody>
				<?php 
					$no=1;
					foreach($pembayaran as $t){
				?>
				<tr>
				  <td class="text-center"><?= $no?>.</td>
				  <td><?= $t->nama_tag?></td>
				  <td class="text-center"><?= $t->sem?></td>
				  <td><?= number_format($t->total)?></td>
				  <td><?= number_format($t->bayar)?></td>
				  <td><?= number_format($t->sisa)?></td>
				  <td><?= tanggal($t->tgl)?></td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
	</div>
</div>