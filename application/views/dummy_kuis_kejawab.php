<!-- Beginning of Header -->
<link rel=stylesheet href="<?php echo base_url(); ?>assets/css/bootstrap.css">
<link rel=stylesheet href="<?php echo base_url(); ?>assets/css/tree-diagram.css">
<style type="text/css" media="screen">
  #navigasi {
    z-index: 1;
    position: absolute;
  }

  #field_bagan {
  	overflow: auto;
  	height: 100%;
  	width: 100%;
  }  
</style>
<!-- End of Header -->

<form action="kuis_struktur_submit" method="post" accept-charset="utf-8">
	<!-- Navigation Pane: Fixed, Collapsible -->
	<div class="row">
		<div id="navigasi" style="background-color: #DFDFDF; max-width: 40vh; max-height: 50vh">
			<button type="button" class="close" aria-label="Close" data-toggle="collapse" data-target="#navigation-pane" style="padding: 5px">
				<span aria-hidden="true">&times;</span>
			</button>
			<br><br>
			<div class="container-fluid" id="navigation-pane" class="collapse">
				<nav class="navbar-nav">
					<ul class="nav nav-pills">
						<li class="active"><a href="#menu1" data-toggle="pill">Panitia CBS Himatif FMIPA Unpad 2017</a></li>
						<li><a href="#menu2" data-toggle="pill">BE Himatif FMIPA Unpad Kabinet Impresif</a></li>
						<li><a href="#menu3" data-toggle="pill">DPA Himatif FMIPA Unpad Parlemen Insight</a></li>
						<li><a href="#menu4" data-toggle="pill">Mubes Himatif FMIPA Unpad 2017</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- End of Navigation Pane -->

	<!-- Quiz Layer, dengan tab-content -->
	<div id="konten" class="container-fluid">
		<div id="header_content" class="row" style="padding-top: 5px;">
			<center><h3>KUIS BK/PANITIA (CEUNAH KUNCI JAWABAN)</h3></center>
		</div>
		<div class="tab-content">
	  		<div id="menu1" class="tab-pane fade in active">
	    		<div id="field_bagan" class="row">
	        		<div class="tree">
	          			<ul>
	            			<li>
	              				<table>
	                				<caption>Project Officer</caption>
	                				<tbody>
		                  				<tr>
		                  					<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_po_cbs"><img src="#" id="foto_cbs_1" style="width: 90px; height: 120px"></td>
		                  				</tr>
		                  				<tr>
		                  					<td><input type="text" name="nama_po_cbs" id="ketua" placeholder="Nama"></td>
		                  				</tr>
	                				</tbody>
	              				</table>
	              				<ul>
	                				<li>
	                  					<table>
	                    					<caption>Sekretaris</caption>
	                    					<tbody>
												<tr>
													<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_sekretaris_cbs"><img src="#" id="foto_cbs_2" style="width: 90px; height: 120px"></td>
												</tr>
												<tr>
													<td><input type="text" name="nama_sekretaris_cbs" id="sekre" placeholder="Nama"></td>
												</tr>
											</tbody>
	                  					</table>
	                				</li><li>
										<table>
											<caption>Bendahara</caption>
											<tbody>
												<tr>
													<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_bendahara_cbs"><img src="#" id="foto_cbs_3" style="width: 90px; height: 120px"></td>
												</tr>
												<tr>
													<td><input type="text" name="nama_bendahara_cbs" id="bendahara" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
									</li><li>
										<table>
											<caption>Ketua Bidang I</caption>
											<tbody>
												<tr>
													<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kabid1_cbs"><img src="#" id="foto_cbs_4" style="width: 90px; height: 120px"></td>
												</tr>
												<tr>
													<td><input type="text" name="nama_kabid1_cbs" id="kabid1" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption>Ketua Divisi Humas</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_humas"><img src="#" id="foto_cbs_5" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadiv_humas" id="humas" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Acara</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_acara"><img src="#" id="foto_cbs_6" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadiv_acara" id="acara" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi PK</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_pk"><img src="#" id="foto_cbs_7" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadiv_pk" id="pk" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li>
										</ul>
									</li><li>
										<table>
											<caption>Ketua Bidang II</caption>
											<tbody>
												<tr>
													<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kabid2_cbs"><img src="#" id="foto_cbs_8" style="width: 90px; height: 120px"></td>
												</tr>
												<tr>
													<td><input type="text" name="nama_kabid2_cbs" id="kabid2" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption>Ketua Divisi Medik</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_medik"><img src="#" id="foto_cbs_9" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadiv_medik" id="medik" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Akademik</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_akademik"><img src="#" id="foto_cbs_10" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadiv_akademik" id="akad" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Komdis</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_komdis"><img src="#" id="foto_cbs_11" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadiv_komdis" id="komdis" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Rohani</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_rohani"><img src="#" id="foto_cbs_12" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadiv_rohani" id="rohani" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li>
										</ul>
									</li><li>
										<table>
											<caption>Ketua Bidang III</caption>
											<tbody>
												<tr>
													<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kabid3_cbs"><img src="#" id="foto_cbs_13" style="width: 90px; height: 120px"></td>
												</tr>
												<tr>
													<td><input type="text" name="nama_kabid3_cbs" id="kabid3" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption>Ketua Divisi Logistik</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_logistik"><img src="#" id="foto_cbs_14" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadiv_logistik" id="logistik" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Dankom</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_dankom"><img src="#" id="foto_cbs_15" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadiv_dankom" id="dankom" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Pubdok</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_pubdok"><img src="#" id="foto_cbs_16" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadiv_pubdok" id="pubdok" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="menu2" class="tab-pane fade">
				<div id="field_bagan" class="row">
					<div class="tree">
						<ul>
							<li>
								<table>
									<caption>Ketua BE</caption>
									<tbody>
										<tr>
											<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_ketua_be"><img src="#" id="foto_be_1" style="width: 90px; height: 120px"></td>
										</tr>
										<tr>
											<td><input type="text" name="nama_ketua_be" id="nama1" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
								<ul>
									<li>
										<table>
											<caption>Wakil Ketua BE</caption>
											<tbody>
												<tr>
													<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_waketu_be"><img src="#" id="foto_be_2" style="width: 90px; height: 120px"></td>
												</tr>
												<tr>
													<td><input type="text" name="nama_waketu_be" id="nama2" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption>Kepala Biro ADK</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kabir_adk"><img src="#" id="foto_be_3" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kabir_adk" id="nama3" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Biro Keuangan</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kabir_uang"><img src="#" id="foto_be_4" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kabir_uang" id="nama4" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Kaderisasi</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_psdm"><img src="#" id="foto_be_5" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadep_psdm" id="nama5" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen PO</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_po"><img src="#" id="foto_be_6" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadep_po" id="nama6" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Hubin</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_hubin"><img src="#" id="foto_be_7" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadep_hubin" id="nama7" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Hubeks</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_hubeks"><img src="#" id="foto_be_8" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadep_hubeks" id="nama8" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Litbang</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_litbang"><img src="#" id="foto_be_9" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadep_litbang" id="nama9" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Medinfo</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_medinfo"><img src="#" id="foto_be_10" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadep_medinfo" id="nama10" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Kewirausahaan</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_wirus"><img src="#" id="foto_be_11" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadep_wirus" id="nama11" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Agama</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_agama"><img src="#" id="foto_be_12" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadep_agama" id="nama12" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Keprofesian</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_keprof"><img src="#" id="foto_be_13" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadep_keprof" id="nama13" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Minat dan Bakat</caption>
													<tbody>
														<tr>
															<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_miba"><img src="#" id="foto_be_14" style="width: 90px; height: 120px"></td>
														</tr>
														<tr>
															<td><input type="text" name="nama_kadep_miba" id="nama14" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="menu3" class="tab-pane fade">
				<div id="field_bagan" class="row">
					<div class="tree">
						<ul>
							<li>
								<table>
									<caption>Ketua DPA</caption>
									<tbody>
										<tr>
											<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_ketua_dpa"><img src="#" id="foto_dpa_1" style="width: 90px; height: 120px"></td>
										</tr>
										<tr>
											<td><input type="text" name="nama_ketua_dpa" id="kdpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Sekretaris DPA</caption>
									<tbody>
										<tr>
											<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_sekretaris_dpa"><img src="#" id="foto_dpa_2" style="width: 90px; height: 120px"></td>
										</tr>
										<tr>
											<td><input type="text" name="nama_sekretaris_dpa" id="sdpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Bendahara DPA</caption>
									<tbody>
										<tr>
											<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_bendahara_dpa"><img src="#" id="foto_dpa_3" style="width: 90px; height: 120px"></td>
										</tr>
										<tr>
											<td><input type="text" name="nama_bendahara_dpa" id="bdpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Ketua Komisi I</caption>
									<tbody>
										<tr>
											<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kakom_1"><img src="#" id="foto_dpa_4" style="width: 90px; height: 120px"></td>
										</tr>
										<tr>
											<td><input type="text" name="nama_kakom_1" id="k1dpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Ketua Komisi II</caption>
									<tbody>
										<tr>
											<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kakom_2"><img src="#" id="foto_dpa_5" style="width: 90px; height: 120px"></td>
										</tr>
										<tr>
											<td><input type="text" name="nama_kakom_2" id="k2dpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Ketua Komisi III</caption>
									<tbody>
										<tr>
											<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kakom_3"><img src="#" id="foto_dpa_6" style="width: 90px; height: 120px"></td>
										</tr>
										<tr>
											<td><input type="text" name="nama_kakom_3" id="k3dpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="menu4" class="tab-pane fade">
				<div id="field_bagan" class="row">
					<div class="tree">
						<ul>
							<li>
								<table>
									<caption>Presidium 1</caption>
									<tbody>
										<tr>
											<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_presidium_1"><img src="#" id="foto_mubes_1" style="width: 90px; height: 120px"></td>
										</tr>
										<tr>
											<td><input type="text" name="nama_presidium_1" id="p1" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Presidium 2</caption>
									<tbody>
										<tr>
											<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_presidium_2"><img src="#" id="foto_mubes_2" style="width: 90px; height: 120px"></td>
										</tr>
										<tr>
											<td><input type="text" name="nama_presidium_2" id="p2" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Presidium 3</caption>
									<tbody>
										<tr>
											<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_presidium_3"><img src="#" id="foto_mubes_3" style="width: 90px; height: 120px"></td>
										</tr>
										<tr>
											<td><input type="text" name="nama_presidium_3" id="p3" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
					</div>
				</div>
			</div> 
		</div>
	</div>
</form>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>