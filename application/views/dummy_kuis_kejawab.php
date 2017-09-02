<!-- Page Header -->
<!-- TODO: tulisan isi kuis dkk ditengahin biar gak berantem -->
<!-- TODO: bikin responsive -->
<div id="header-content" class="row">
	<div class="header-title" id="kuis">
		<h1>YOUR LATEST SUBMISSION (<?php echo $npm; ?>)</h1>
	</div>
	<a href="<?php echo base_url(); ?>kuis/isi" class="btn btn-success" target="_blank">Take your Quiz!</a>
</div>

<div id="navigation-panel" class="col-sm-12 col-md-12 col-lg-12">
	<nav class="navbar-nav" style="background-color: white; padding: 10px; width: 100%;">
		<ul class="nav nav-pills">
			<li class="active" style="margin-right: 10px"><a href="#menu1" data-toggle="pill">CBS Himatif FMIPA Unpad 2017</a></li>
			<li style="margin-right: 10px"><a href="#menu2" data-toggle="pill">BE Himatif FMIPA Unpad Kabinet Impresif</a></li>
			<li style="margin-right: 10px"><a href="#menu3" data-toggle="pill">DPA Himatif FMIPA Unpad Parlemen Insight</a></li>
			<li style="margin-right: 10px"><a href="#menu4" data-toggle="pill">Mubes Himatif FMIPA Unpad 2017</a></li>
		</ul>
	</nav>
</div>
<!-- End of Navigation Pane -->

<!-- Quiz Layer, dengan tab-content -->
<div id="konten" class="col-sm-12 col-md-12 col-lg-12">
	<div class="tab-content">
  		<div id="menu1" class="tab-pane fade in active">
    		<div id="field-bagan">
        		<div class="tree">
          			<ul>
            			<li>
              				<table>
                				<caption>Project Officer</caption>
                				<tbody>
	                  				<tr>
	                  					<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_po_cbs"><img src="<?php echo $panitia['po_cbs']->link_foto; ?>" id="foto_cbs_1" style="width: 90px; height: 120px"></td>
	                  				</tr>
	                  				<tr>
	                  					<td><input type="text" readonly="TRUE" name="po_cbs" id="ketua" placeholder="Nama" value="<?php echo $panitia['po_cbs']->nama; ?>"></td>
	                  				</tr>
                				</tbody>
              				</table>
              				<ul>
                				<li>
                  					<table>
                    					<caption>Sekretaris</caption>
                    					<tbody>
											<tr>
												<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_sekretaris_cbs"><img src="<?php echo $panitia['sekretaris_cbs']->link_foto; ?>" id="foto_cbs_2" style="width: 90px; height: 120px"></td>
											</tr>
											<tr>
												<td><input type="text" readonly="TRUE" name="sekretaris_cbs" id="sekre" placeholder="Nama" value="<?php echo $panitia['sekretaris_cbs']->nama; ?>"></td>
											</tr>
										</tbody>
                  					</table>
                				</li><li>
									<table>
										<caption>Bendahara</caption>
										<tbody>
											<tr>
												<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_bendahara_cbs"><img src="<?php echo $panitia['bendahara_cbs']->link_foto; ?>" id="foto_cbs_3" style="width: 90px; height: 120px"></td>
											</tr>
											<tr>
												<td><input type="text" readonly="TRUE" name="bendahara_cbs" id="bendahara" placeholder="Nama" value="<?php echo $panitia['bendahara_cbs']->nama; ?>"></td>
											</tr>
										</tbody>
									</table>
								</li><li>
									<table>
										<caption>Ketua Bidang I</caption>
										<tbody>
											<tr>
												<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kabid1_cbs"><img src="<?php echo $panitia['kabid1_cbs']->link_foto; ?>" id="foto_cbs_4" style="width: 90px; height: 120px"></td>
											</tr>
											<tr>
												<td><input type="text" readonly="TRUE" name="kabid1_cbs" id="kabid1" placeholder="Nama" value="<?php echo $panitia['kabid1_cbs']->nama; ?>"></td>
											</tr>
										</tbody>
									</table>
									<ul>
										<li>
											<table>
												<caption>Ketua Divisi Humas</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_humas"><img src="<?php echo $panitia['kadiv_humas_cbs']->link_foto; ?>" id="foto_cbs_5" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="kadiv_humas_cbs" id="humas" placeholder="Nama" value="<?php echo $panitia['kadiv_humas_cbs']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Ketua Divisi Acara</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_acara"><img src="<?php echo $panitia['kadiv_acara_cbs']->link_foto; ?>" id="foto_cbs_6" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="kadiv_acara_cbs" id="acara" placeholder="Nama" value="<?php echo $panitia['kadiv_acara_cbs']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Ketua Divisi PK</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_pk"><img src="<?php echo $panitia['kadiv_pk_cbs']->link_foto; ?>" id="foto_cbs_7" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="kadiv_pk_cbs" id="pk" placeholder="Nama" value="<?php echo $panitia['kadiv_pk_cbs']->nama; ?>"></td>
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
												<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kabid2_cbs"><img src="<?php echo $panitia['kabid2_cbs']->link_foto; ?>" id="foto_cbs_8" style="width: 90px; height: 120px"></td>
											</tr>
											<tr>
												<td><input type="text" readonly="TRUE" name="kabid2_cbs" id="kabid2" placeholder="Nama" value="<?php echo $panitia['kabid2_cbs']->nama; ?>"></td>
											</tr>
										</tbody>
									</table>
									<ul>
										<li>
											<table>
												<caption>Ketua Divisi Medik</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_medik"><img src="<?php echo $panitia['kadiv_medik_cbs']->link_foto; ?>" id="foto_cbs_9" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="kadiv_medik_cbs" id="medik" placeholder="Nama" value="<?php echo $panitia['kadiv_medik_cbs']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Ketua Divisi Akademik</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_akademik"><img src="<?php echo $panitia['kadiv_akademik_cbs']->link_foto; ?>" id="foto_cbs_10" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="kadiv_akademik_cbs" id="akad" placeholder="Nama" value="<?php echo $panitia['kadiv_akademik_cbs']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Ketua Divisi Komdis</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_komdis"><img src="<?php echo $panitia['kadiv_komdis_cbs']->link_foto; ?>" id="foto_cbs_11" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="kadiv_komdis_cbs" id="komdis" placeholder="Nama" value="<?php echo $panitia['kadiv_komdis_cbs']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Ketua Divisi Rohani</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_rohani"><img src="<?php echo $panitia['kadiv_rohani_cbs']->link_foto; ?>" id="foto_cbs_12" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="kadiv_rohani_cbs" id="rohani" placeholder="Nama" value="<?php echo $panitia['kadiv_rohani_cbs']->nama; ?>"></td>
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
												<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kabid3_cbs"><img src="<?php echo $panitia['kabid3_cbs']->link_foto; ?>" id="foto_cbs_13" style="width: 90px; height: 120px"></td>
											</tr>
											<tr>
												<td><input type="text" readonly="TRUE" name="kabid3_cbs" id="kabid3" placeholder="Nama" value="<?php echo $panitia['kabid3_cbs']->nama; ?>"></td>
											</tr>
										</tbody>
									</table>
									<ul>
										<li>
											<table>
												<caption>Ketua Divisi Logistik</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_logistik"><img src="<?php echo $panitia['kadiv_logistik_cbs']->link_foto; ?>" id="foto_cbs_14" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="kadiv_logistik_cbs" id="logistik" placeholder="Nama" value="<?php echo $panitia['kadiv_logistik_cbs']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Ketua Divisi Dankom</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_dankom"><img src="<?php echo $panitia['kadiv_dankom_cbs']->link_foto; ?>" id="foto_cbs_15" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="kadiv_dankom_cbs" id="dankom" placeholder="Nama" value="<?php echo $panitia['kadiv_dankom_cbs']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Ketua Divisi Pubdok</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadiv_pubdok"><img src="<?php echo $panitia['kadiv_pubdok_cbs']->link_foto; ?>" id="foto_cbs_16" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="kadiv_pubdok_cbs" id="pubdok" placeholder="Nama" value="<?php echo $panitia['kadiv_pubdok_cbs']->nama; ?>"></td>
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
			<div id="field-bagan">
				<div class="tree">
					<ul>
						<li>
							<table>
								<caption>Ketua BE</caption>
								<tbody>
									<tr>
										<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_ketua_be"><img src="<?php echo $be['ketua_be']->link_foto; ?>" id="foto_be_1" style="width: 90px; height: 120px"></td>
									</tr>
									<tr>
										<td><input type="text" readonly="TRUE" name="nama_ketua_be" id="nama1" placeholder="Nama" value="<?php echo $be['ketua_be']->nama; ?>"></td>
									</tr>
								</tbody>
							</table>
							<ul>
								<li>
									<table>
										<caption>Wakil Ketua BE</caption>
										<tbody>
											<tr>
												<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_waketu_be"><img src="<?php echo $be['waketu_be']->link_foto; ?>" id="foto_be_2" style="width: 90px; height: 120px"></td>
											</tr>
											<tr>
												<td><input type="text" readonly="TRUE" name="nama_waketu_be" id="nama2" placeholder="Nama" value="<?php echo $be['waketu_be']->nama; ?>"></td>
											</tr>
										</tbody>
									</table>
									<ul>
										<li>
											<table>
												<caption>Kepala Biro ADK</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kabir_adk"><img src="<?php echo $be['kabir_adk']->link_foto; ?>" id="foto_be_3" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kabir_adk" id="nama3" placeholder="Nama" value="<?php echo $be['kabir_adk']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Biro Keuangan</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kabir_uang"><img src="<?php echo $be['kabir_uang']->link_foto; ?>" id="foto_be_4" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kabir_uang" id="nama4" placeholder="Nama" value="<?php echo $be['kabir_uang']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Departemen Kaderisasi</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_psdm"><img src="<?php echo $be['kadep_psdm']->link_foto; ?>" id="foto_be_5" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kadep_psdm" id="nama5" placeholder="Nama" value="<?php echo $be['kadep_psdm']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Departemen PO</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_po"><img src="<?php echo $be['kadep_po']->link_foto; ?>" id="foto_be_6" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kadep_po" id="nama6" placeholder="Nama" value="<?php echo $be['kadep_po']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Departemen Hubin</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_hubin"><img src="<?php echo $be['kadep_hubin']->link_foto; ?>" id="foto_be_7" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kadep_hubin" id="nama7" placeholder="Nama" value="<?php echo $be['kadep_hubin']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Departemen Hubeks</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_hubeks"><img src="<?php echo $be['kadep_hubeks']->link_foto; ?>" id="foto_be_8" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kadep_hubeks" id="nama8" placeholder="Nama" value="<?php echo $be['kadep_hubeks']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Departemen Litbang</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_litbang"><img src="<?php echo $be['kadep_litbang']->link_foto; ?>" id="foto_be_9" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kadep_litbang" id="nama9" placeholder="Nama" value="<?php echo $be['kadep_litbang']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Departemen Medinfo</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_medinfo"><img src="<?php echo $be['kadep_medinfo']->link_foto; ?>" id="foto_be_10" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kadep_medinfo" id="nama10" placeholder="Nama" value="<?php echo $be['kadep_medinfo']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Departemen Kewirausahaan</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_wirus"><img src="<?php echo $be['kadep_wirus']->link_foto; ?>" id="foto_be_11" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kadep_wirus" id="nama11" placeholder="Nama" value="<?php echo $be['kadep_wirus']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Departemen Agama</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_agama"><img src="<?php echo $be['kadep_agama']->link_foto; ?>" id="foto_be_12" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kadep_agama" id="nama12" placeholder="Nama" value="<?php echo $be['kadep_agama']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Departemen Keprofesian</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_keprof"><img src="<?php echo $be['kadep_keprof']->link_foto; ?>" id="foto_be_13" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kadep_keprof" id="nama13" placeholder="Nama" value="<?php echo $be['kadep_keprof']->nama; ?>"></td>
													</tr>
												</tbody>
											</table>
										</li><li>
											<table>
												<caption>Kepala Departemen Minat dan Bakat</caption>
												<tbody>
													<tr>
														<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kadep_miba"><img src="<?php echo $be['kadep_miba']->link_foto; ?>" id="foto_be_14" style="width: 90px; height: 120px"></td>
													</tr>
													<tr>
														<td><input type="text" readonly="TRUE" name="nama_kadep_miba" id="nama14" placeholder="Nama" value="<?php echo $be['kadep_miba']->nama; ?>"></td>
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
			<div id="field-bagan">
				<div class="tree">
					<ul>
						<li style="margin: 10px">
							<table>
								<caption>Ketua DPA</caption>
								<tbody>
									<tr>
										<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_ketua_dpa"><img src="<?php echo $dpa['ketua_dpa']->link_foto; ?>" id="foto_dpa_1" style="width: 90px; height: 120px"></td>
									</tr>
									<tr>
										<td><input type="text" readonly="TRUE" name="nama_ketua_dpa" id="kdpa" placeholder="Nama" value="<?php echo $dpa['ketua_dpa']->nama; ?>"></td>
									</tr>
								</tbody>
							</table>
						</li><li style="margin: 10px">
							<table>
								<caption>Sekretaris DPA</caption>
								<tbody>
									<tr>
										<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_sekretaris_dpa"><img src="<?php echo $dpa['sekretaris_dpa']->link_foto; ?>" id="foto_dpa_2" style="width: 90px; height: 120px"></td>
									</tr>
									<tr>
										<td><input type="text" readonly="TRUE" name="nama_sekretaris_dpa" id="sdpa" placeholder="Nama" value="<?php echo $dpa['sekretaris_dpa']->nama; ?>"></td>
									</tr>
								</tbody>
							</table>
						</li><li style="margin: 10px">
							<table>
								<caption>Bendahara DPA</caption>
								<tbody>
									<tr>
										<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_bendahara_dpa"><img src="<?php echo $dpa['bendahara_dpa']->link_foto; ?>" id="foto_dpa_3" style="width: 90px; height: 120px"></td>
									</tr>
									<tr>
										<td><input type="text" readonly="TRUE" name="nama_bendahara_dpa" id="bdpa" placeholder="Nama" value="<?php echo $dpa['bendahara_dpa']->nama; ?>"></td>
									</tr>
								</tbody>
							</table>
						</li><li style="margin: 10px">
							<table>
								<caption>Ketua Komisi I</caption>
								<tbody>
									<tr>
										<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kakom_1"><img src="<?php echo $dpa['kakom_1']->link_foto; ?>" id="foto_dpa_4" style="width: 90px; height: 120px"></td>
									</tr>
									<tr>
										<td><input type="text" readonly="TRUE" name="nama_kakom_1" id="k1dpa" placeholder="Nama" value="<?php echo $dpa['kakom_1']->nama; ?>"></td>
									</tr>
								</tbody>
							</table>
						</li><li style="margin: 10px">
							<table>
								<caption>Ketua Komisi II</caption>
								<tbody>
									<tr>
										<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kakom_2"><img src="<?php echo $dpa['kakom_2']->link_foto; ?>" id="foto_dpa_5" style="width: 90px; height: 120px"></td>
									</tr>
									<tr>
										<td><input type="text" readonly="TRUE" name="nama_kakom_2" id="k2dpa" placeholder="Nama" value="<?php echo $dpa['kakom_2']->nama; ?>"></td>
									</tr>
								</tbody>
							</table>
						</li><li style="margin: 10px">
							<table>
								<caption>Ketua Komisi III</caption>
								<tbody>
									<tr>
										<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_kakom_3"><img src="<?php echo $dpa['kakom_3']->link_foto; ?>" id="foto_dpa_6" style="width: 90px; height: 120px"></td>
									</tr>
									<tr>
										<td><input type="text" readonly="TRUE" name="nama_kakom_3" id="k3dpa" placeholder="Nama" value="<?php echo $dpa['kakom_3']->nama; ?>"></td>
									</tr>
								</tbody>
							</table>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="menu4" class="tab-pane fade">
			<div id="field-bagan">
				<div class="tree">
					<ul>
						<li>
							<table>
								<caption>Presidium 1</caption>
								<tbody>
									<tr>
										<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_presidium_1"><img src="<?php echo $presidium['presidium_1']->link_foto; ?>" id="foto_mubes_1" style="width: 90px; height: 120px"></td>
									</tr>
									<tr>
										<td><input type="text" readonly="TRUE" name="nama_presidium_1" id="p1" placeholder="Nama" value="<?php echo $presidium['presidium_1']->nama; ?>"></td>
									</tr>
								</tbody>
							</table>
						</li><li>
							<table>
								<caption>Presidium 2</caption>
								<tbody>
									<tr>
										<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_presidium_2"><img src="<?php echo $presidium['presidium_2']->link_foto; ?>" id="foto_mubes_2" style="width: 90px; height: 120px"></td>
									</tr>
									<tr>
										<td><input type="text" readonly="TRUE" name="nama_presidium_2" id="p2" placeholder="Nama" value="<?php echo $presidium['presidium_2']->nama; ?>"></td>
									</tr>
								</tbody>
							</table>
						</li><li>
							<table>
								<caption>Presidium 3</caption>
								<tbody>
									<tr>
										<td style="height: 155px; width: 115px"><input type="hidden" name="Link Foto" value="#" id="foto_presidium_3"><img src="<?php echo $presidium['presidium_3']->link_foto; ?>" id="foto_mubes_3" style="width: 90px; height: 120px"></td>
									</tr>
									<tr>
										<td><input type="text" readonly="TRUE" name="nama_presidium_3" id="p3" placeholder="Nama" value="<?php echo $presidium['presidium_3']->nama; ?>"></td>
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

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#navigation-panel').show();
		$('#toggleNav').click(function(){
		    $('#navigation-panel').slideToggle('slow');
		});
		$(document).ready(function() {
		    $(document).scrollTop(0);
		});
	});
</script>