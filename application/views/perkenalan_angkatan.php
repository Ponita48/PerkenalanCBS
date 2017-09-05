	<div class="header-title">
		<h1>
		<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?> <!-- npm di session = npm yang dilihat -->
			MY
		<?php endif ?>
		FRIENDS LIST</h1>
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<?php if ($this->session->userdata['logged_in']['role'] == "admin"): ?>
						<th>NPM Peserta</th>
					<?php endif ?>
					<th>NPM</th>
					<th>Nama</th>
					<th>Foto</th>
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
					<?php if ($this->session->userdata['logged_in']['role'] == "admin"): ?>
						<td><?php echo $key->npm_peserta; ?></td>
					<?php endif ?>
					<td><?php echo $key->npm_angkatan; ?></td>
					<td><?php echo $key->nama; ?></td>
					<td><center><img src="<?php echo $key->link_foto; ?>" class="img-responsive"></center></td>
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