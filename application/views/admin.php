	<div class=header-title>
		<h1>REQUESTS SUBMISSION</h1>
	</div>

	<div class="container">
  		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<!-- TODO: span badge dihitung jumlah perkenalan -->
			<?php 
				$jmlAngkatan = [0, 0, 0, 0, 0];
				foreach ($result as $key) {
					switch ($key->angkatan_keluarga) {
						case '2012':
							$jmlAngkatan[0]++;
							break;
						case '2013':
							$jmlAngkatan[1]++;
							break;
						case '2014':
							$jmlAngkatan[2]++;
							break;
						case '2015':
							$jmlAngkatan[3]++;
							break;
						case '2016':
							$jmlAngkatan[4]++;
							break;
						default:
							break;
					}
				}
			 ?>
			<li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">2016 <span class="badge"><?php echo $jmlAngkatan[4]; ?></span></a></li>
			<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">2015 <span class="badge"><?php echo $jmlAngkatan[3]; ?></span></a></li>
			<li role="presentation"><a href="#3" aria-controls="3" role="tab" data-toggle="tab">2014 <span class="badge"><?php echo $jmlAngkatan[2]; ?></span></a></li>
			<li role="presentation"><a href="#4" aria-controls="4" role="tab" data-toggle="tab">2013 <span class="badge"><?php echo $jmlAngkatan[1]; ?></span></a></li>
			<li role="presentation"><a href="#5" aria-controls="5" role="tab" data-toggle="tab">2012 <span class="badge"><?php echo $jmlAngkatan[0]; ?></span></a></li>
		</ul><br>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane container-fluid active" id="1">
				<center>
					<div class="wrapper-for-all cf">
					<div class="col-md-12 col-sm-12 col-lg-12" id="search" style="background-color: #FFD51E; padding: 10px; margin-top: 0; margin-bottom: 10px; display: none;">
					<center>
						<div class="input-group">
							<input type="text" class="form-control" id="filterKey" placeholder="Filter">
							<span class="input-group-btn" id="filter">
								<button class="btn btn-primary">Search</button>
							</span>
						</div>
					</center>
					</div>
						<table class="table">
							<tr>
								<th>Nama Keluarga</th>
								<th>NPM Keluarga</th>
								<th>Nama Peserta</th>
								<th>NPM Peserta</th>
								<th>Details</th>
							</tr>
						<?php if (isset($result)) : ?>
							<?php foreach ($result as $key) : ?>
								<?php if ($key->angkatan_keluarga == 2016) : ?>
									<tr class="item">
										<td><?php echo $key->nama; ?></td>
										<td><?php echo $key->npm_keluarga; ?></td>
										<td><?php echo $key->nama_peserta; ?></td>
										<td class="npm"><?php echo $key->npm_peserta; ?></td>
										<td><a href="<?php echo base_url().'detail_perkenalan/'.$key->id_perkenalan_kating; ?>">
											<button class="btn btn-primary">Click Here</button>
										</a></td>
									</tr>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
						</table>
					</div>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid" id="2">
				<center>
					<div class="wrapper-for-all cf">
						<table class="table">
							<tr>
								<th>Nama Keluarga</th>
								<th>NPM Keluarga</th>
								<th>Nama Peserta</th>
								<th>NPM Peserta</th>
								<th>Details</th>
							</tr>
						<?php if (isset($result)) : ?>
							<?php foreach ($result as $key) : ?>
								<?php if ($key->angkatan_keluarga == 2015) : ?>
									<tr class="item">
										<td><?php echo $key->nama; ?></td>
										<td><?php echo $key->npm_keluarga; ?></td>
										<td><?php echo $key->nama_peserta; ?></td>
										<td class="npm"><?php echo $key->npm_peserta; ?></td>
										<td><a href="<?php echo base_url().'detail_perkenalan/'.$key->id_perkenalan_kating; ?>">
											<button class="btn btn-primary">Click Here</button>
										</a></td>
									</tr>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
						</table>
					</div>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid" id="3">
				<center>
					<div class="wrapper-for-all cf">
						<table class="table">
							<tr>
								<th>Nama Keluarga</th>
								<th>NPM Keluarga</th>
								<th>Nama Peserta</th>
								<th>NPM Peserta</th>
								<th>Details</th>
							</tr>
						<?php if (isset($result)) : ?>
							<?php foreach ($result as $key) : ?>
								<?php if ($key->angkatan_keluarga == 2014) : ?>
									<tr class="item">
										<td><?php echo $key->nama; ?></td>
										<td><?php echo $key->npm_keluarga; ?></td>
										<td><?php echo $key->nama_peserta; ?></td>
										<td class="npm"><?php echo $key->npm_peserta; ?></td>
										<td><a href="<?php echo base_url().'detail_perkenalan/'.$key->id_perkenalan_kating; ?>">
											<button class="btn btn-primary">Click Here</button>
										</a></td>
									</tr>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
						</table>
					</div>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid" id="4">
				<center>
					<div class="wrapper-for-all cf">
						<table class="table">
							<tr>
								<th>Nama Keluarga</th>
								<th>NPM Keluarga</th>
								<th>Nama Peserta</th>
								<th>NPM Peserta</th>
								<th>Details</th>
							</tr>
						<?php if (isset($result)) : ?>
							<?php foreach ($result as $key) : ?>
								<?php if ($key->angkatan_keluarga == 2013) : ?>
									<tr class="item">
										<td><?php echo $key->nama; ?></td>
										<td><?php echo $key->npm_keluarga; ?></td>
										<td><?php echo $key->nama_peserta; ?></td>
										<td class="npm"><?php echo $key->npm_peserta; ?></td>
										<td><a href="<?php echo base_url().'detail_perkenalan/'.$key->id_perkenalan_kating; ?>">
											<button class="btn btn-primary">Click Here</button>
										</a></td>
									</tr>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
						</table>
					</div>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid" id="5">
				<center>
					<div class="wrapper-for-all cf">
						<table class="table">
							<tr>
								<th>Nama Keluarga</th>
								<th>NPM Keluarga</th>
								<th>Nama Peserta</th>
								<th>NPM Peserta</th>
								<th>Details</th>
							</tr>
						<?php if (isset($result)) : ?>
							<?php foreach ($result as $key) : ?>
								<?php if ($key->angkatan_keluarga == 2012) : ?>
									<tr class="item">
										<td><?php echo $key->nama; ?></td>
										<td><?php echo $key->npm_keluarga; ?></td>
										<td><?php echo $key->nama_peserta; ?></td>
										<td class="npm"><?php echo $key->npm_peserta; ?></td>
										<td><a href="<?php echo base_url().'detail_perkenalan/'.$key->id_perkenalan_kating; ?>">
											<button class="btn btn-primary">Click Here</button>
										</a></td>
									</tr>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
						</table>
					</div>
				</center>
			</div>
		</div>
	</div>