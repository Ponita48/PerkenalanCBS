
	<div>
		<h1>ADMIN</h1>
		<hr>
		<br>
	</div>

	<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NPM</th>
				<th>Link ke profile</th>
			</tr>
		</thead>
		<tbody>
		<!-- <?php foreach ($result as $key) : ?>
			<tr>
				<td><?php echo $key->nama_peserta; ?></td>
				<td><?php echo $key->npm_peserta; ?></td>
				<td><?php echo $key->jumlah; ?></td>
			</tr>
		<?php endforeach; ?> -->
		<?php for ($i=0; $i < 3; $i++) { ?>
			<tr>
				<td>nama wahaha</td>
				<td>npm wahaha</td>
				<td><a href="#" class="btn btn-success">Link</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>	