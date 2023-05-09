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
				</tr>
			</tfoot>
			<tbody>
				<?php 
					$no=1;
					foreach($tagihan as $t){
				?>
				<tr>
					<td class="text-center"><?= $no?>.</td>
					<td><?= $t->nama_tag?></td>
					<td class="text-center"><?= $t->sem?></td>
					<td><?= number_format($t->total)?></td>
					<td><?= number_format($t->dibayar)?></td>
					<td>
						<?php
							$sisa = $t->total - $t->dibayar;
							if($sisa==0){
								echo 'LUNAS';
							}else{
								echo number_format($sisa);
							}
						?>
					</td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
	</div>
</div>