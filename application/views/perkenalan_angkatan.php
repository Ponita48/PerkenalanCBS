	<h1>PERKENALAN ANGKATAN</h1>
	<hr>

	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Foto</th>
					<th>NPM Peserta</th>
					<th>NPM Teman</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Alamat Kos</th>
					<th>ID LINE</th>
					<th>No HP</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($result as $key) : ?>
				<tr>
					<td><img src="<?php echo $key->link_foto; ?>"></td>
					<td><?php echo $key->npm_peserta; ?></td>
					<td><?php echo $key->npm_angkatan; ?></td>
					<td><?php echo $key->nama; ?></td>
					<td><?php echo $key->tempat_lahir; ?></td>
					<td><?php echo $key->tgl_lahir; ?></td>
					<td><?php echo $key->alamat_kos; ?></td>
					<td><?php echo $key->id_line; ?></td>
					<td><?php echo $key->no_hp; ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>