<h1>REQUEST LIST</h1>
<hr>

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>NPM</th>
				<th>Jumlah Perkenalan</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($result as $key) : ?>
			<tr>
				<td><?php echo $key->npm_peserta; ?></td>
				<td><?php echo $key->jumlah; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>