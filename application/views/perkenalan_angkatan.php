	<div class="header-title">
		<h1>
		<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?> <!-- npm di session = npm yang dilihat -->
			MY
		<?php endif ?>
		FRIENDS LIST 
			<?php if ($this->session->userdata('logged_in')['role'] == "admin"): ?>	
				<?php $i = 0; ?>
				<?php foreach ($result as $key): ?>
					<?php $i++; ?>
				<?php endforeach ?>
				(<?php echo $i; ?>)
			<?php endif ?>
		</h1>
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<?php if ($this->session->userdata['logged_in']['role'] == "admin"): ?>
						<th>NPM Peserta</th>
					<?php endif ?>
					<th>Foto</th>
					<th>NPM</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Alamat Kos</th>
					<th>ID LINE</th>
					<th>No HP</th>
					<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?>
						<!-- TAMBAHIN LINK BUAT EDIT -->
						<th></th>
					<?php endif	?>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($result as $key) : ?>
				<tr>
					<?php if ($this->session->userdata['logged_in']['role'] == "admin"): ?>
						<td><?php echo $key->npm_peserta; ?></td>
					<?php endif ?>
					<td><center><img src="<?php echo $key->link_foto; ?>" class="img-responsive img-thumbnail"></center></td>
					<td><?php echo $key->npm_angkatan; ?></td>
					<td><?php echo $key->nama; ?></td>
					<td><?php echo $key->tempat_lahir; ?></td>
					<td><?php echo $key->tgl_lahir; ?></td>
					<td><?php echo $key->alamat_kos; ?></td>
					<td><?php echo $key->id_line; ?></td>
					<td><?php echo $key->no_hp; ?></td>
					<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?>
						<!-- TAMBAHIN LINK BUAT EDIT -->
						<td><a href="<?php echo base_url().'perkenalan_angkatan/'.$key->id_perkenalan_angkatan.'/edit'; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i>&nbsp; Edit</a></td>
					<?php endif	?>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>