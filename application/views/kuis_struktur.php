<!-- Beginning of Header -->
<link rel=stylesheet href="<?php echo base_url(); ?>assets/css/bootstrap.css">
<link rel=stylesheet href="<?php echo base_url(); ?>assets/css/tree-diagram.css">
<style type="text/css" media="screen">

  #navigation-panel {
  	display: none;
  	width: 100%;
  }

  #photobar {
  	overflow: auto; 
  	height: 100vh;
  	background-color: gray;
  }

  #field_bagan {
  	overflow: auto;
  	height: 100vh;
  	background-color: #393636;
  }

  #header-content {
  	background-color: #FFD51E;
  	color: #393636;
  }

  .receiver {
  	width: 90px;
  	height: 120px;
	background-color: white;
  }

  body {
  	background-color: #FFD51E;
  	color: #393636;
  }

  ul li a {
  	color: #393636;
  }

  caption {
  	color: #FFD51E;
  }

  .active a {
  	background-color: goldenrod !important;
  	color: white !important;
  }
  
</style>
<!-- End of Header -->

<form action="<?php echo base_url(); ?>kuis/submit" method="post" accept-charset="utf-8">
	<!-- Page Header -->
	<div id="header-content" class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<center>
				<h3>KUIS BK/PANITIA (<?php echo $npm; ?>)</h3>
			</center>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<center>
				<button type="button" class="btn" id="toggleNav" style="color: #FFD51E; background-color: #393636;">Toggle Navigasi</button>
			</center>
			<br>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<center>	
				<a href="<?php echo base_url(); ?>kuis/jawaban" class="btn btn-primary" target="_blank">Lihat Jawaban Kuis Sebelumnya</a>
			</center>
			<br>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<center>	
				<input class="btn btn-success" type="submit" name="Kirim">
			</center>
			<br>
		</div>
	</div>
	<!-- End of Page Header -->
	<!-- Navigation Pane: Fixed, Collapsible -->
	<div id="navigation-panel" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<nav class="navbar-nav" style="background-color: white; padding: 10px; width: 100%;">
			<ul class="nav nav-pills">
				<li class="active" style="margin-right: 10px"><a href="#menu1" data-toggle="pill">Panitia CBS Himatif FMIPA Unpad 2017</a></li>
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
	    		<div id="field_bagan" class="col-sm-10 col-md-10 col-lg-10">
	        		<div class="tree">
	          			<ul>
	            			<li>
	              				<table>
	                				<caption><center>Project Officer</center></caption>
	                				<tbody>
		                  				<tr>
		                  					<td>
		                  						<center>
		                  							<div id="jawaban1" class="receiver" ondrop="drop1(event,this)" ondragover="allowDrop(event)"></div>
		                  							<input type="hidden" name="panitia[po_cbs][link_foto]" value="" id="foto_po_cbs"><br>	
		                  						</center>
		                  					</td>
		                  				</tr>
		                  				<tr>
		                  					<td><input type="text" name="panitia[po_cbs][nama]" id="ketua" placeholder="Nama"></td>
		                  				</tr>
	                				</tbody>
	              				</table>
	              				<ul>
	                				<li>
	                  					<table>
	                    					<caption><center>Sekretaris</center></caption>
	                    					<tbody>
												<tr>
													<td>
														<center>
		                  									<div id="jawaban2" class="receiver" ondrop="drop2(event,this)" ondragover="allowDrop(event)"></div>
		                  									<input type="hidden" name="panitia[sekretaris_cbs][link_foto]" value="" id="foto_sekretaris_cbs"><br>
		                  								</center>
		                  							</td>
												</tr>
												<tr>
													<td><input type="text" name="panitia[sekretaris_cbs][nama]" id="sekre" placeholder="Nama"></td>
												</tr>
											</tbody>
	                  					</table>
	                				</li><li>
										<table>
											<caption><center>Bendahara</center></caption>
											<tbody>
												<tr>
													<td>
														<center>
		                  									<div id="jawaban3" class="receiver" ondrop="drop3(event,this)" ondragover="allowDrop(event)"></div>
															<input type="hidden" name="panitia[bendahara_cbs][link_foto]" value="" id="foto_bendahara_cbs"><br>
														</center>
													</td>
												</tr>
												<tr>
													<td><input type="text" name="panitia[bendahara_cbs][nama]" id="bendahara" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
									</li><li>
										<table>
											<caption><center>Ketua Bidang I</center></caption>
											<tbody>
												<tr>
													<td>
														<center>
		                  									<div id="jawaban4" class="receiver" ondrop="drop4(event,this)" ondragover="allowDrop(event)"></div>
															<input type="hidden" name="panitia[kabid1_cbs][link_foto]" value="" id="foto_kabid1_cbs"><br>
														</center>
													</td>
												</tr>
												<tr>
													<td><input type="text" name="panitia[kabid1_cbs][nama]" id="kabid1" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption><center>Ketua Divisi Humas</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban5" class="receiver" ondrop="drop5(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="panitia[kadiv_humas_cbs][link_foto]" value="" id="foto_kadiv_humas"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_humas_cbs][nama]" id="humas" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Ketua Divisi Acara</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban6" class="receiver" ondrop="drop6(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="panitia[kadiv_acara_cbs][link_foto]" value="" id="foto_kadiv_acara"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_acara_cbs][nama]" id="acara" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Ketua Divisi PK</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban7" class="receiver" ondrop="drop7(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="panitia[kadiv_pk_cbs][link_foto]" value="" id="foto_kadiv_pk"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_pk_cbs][nama]" id="pk" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li>
										</ul>
									</li><li>
										<table>
											<caption><center>Ketua Bidang II</center></caption>
											<tbody>
												<tr>
													<td>
														<center>
		                  									<div id="jawaban8" class="receiver" ondrop="drop8(event,this)" ondragover="allowDrop(event)"></div>
															<input type="hidden" name="panitia[kabid2_cbs][link_foto]" value="" id="foto_kabid2_cbs"><br>
														</center>
													</td>
												</tr>
												<tr>
													<td><input type="text" name="panitia[kabid2_cbs][nama]" id="kabid2" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption><center>Ketua Divisi Medik</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban9" class="receiver" ondrop="drop9(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="panitia[kadiv_medik_cbs][link_foto]" value="" id="foto_kadiv_medik"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_medik_cbs][nama]" id="medik" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Ketua Divisi Akademik</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban10" class="receiver" ondrop="drop10(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="panitia[kadiv_akademik_cbs][link_foto]" value="" id="foto_kadiv_akademik"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_akademik_cbs][nama]" id="akad" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Ketua Divisi Komdis</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban11" class="receiver" ondrop="drop11(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="panitia[kadiv_komdis_cbs][link_foto]" value="" id="foto_kadiv_komdis"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_komdis_cbs][nama]" id="komdis" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Ketua Divisi Rohani</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban12" class="receiver" ondrop="drop12(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="panitia[kadiv_rohani_cbs][link_foto]" value="" id="foto_kadiv_rohani"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_rohani_cbs][nama]" id="rohani" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li>
										</ul>
									</li><li>
										<table>
											<caption><center>Ketua Bidang III</center></caption>
											<tbody>
												<tr>
													<td>
														<center>
		                  									<div id="jawaban13" class="receiver" ondrop="drop13(event,this)" ondragover="allowDrop(event)"></div>
															<input type="hidden" name="panitia[kabid3_cbs][link_foto]" value="" id="foto_kabid3_cbs"><br>
														</center>
													</td>
												</tr>
												<tr>
													<td><input type="text" name="panitia[kabid3_cbs][nama]" id="kabid3" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption><center>Ketua Divisi Logistik</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban14" class="receiver" ondrop="drop14(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="panitia[kadiv_logistik_cbs][link_foto]" value="" id="foto_kadiv_logistik"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_logistik_cbs][nama]" id="logistik" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Ketua Divisi Dankom</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
				                  									<div id="jawaban15" class="receiver" ondrop="drop15(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="panitia[kadiv_dankom_cbs][link_foto]" value="" id="foto_kadiv_dankom"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_dankom_cbs][nama]" id="dankom" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Ketua Divisi Pubdok</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban16" class="receiver" ondrop="drop16(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="panitia[kadiv_pubdok_cbs][link_foto]" value="" id="foto_kadiv_pubdok"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_pubdok_cbs][nama]" id="pubdok" placeholder="Nama"></td>
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
				<div class="col-sm-2 col-md-2 col-lg-2" id="photobar">
	  				<br><center>
	  					<table>
							<tbody>
								<?php for ($i=1; $i <= 16; $i++) {  ?>
									<tr>
										<td>
											<center>
												<div id="kotak_cbs_<?php echo "$i"; ?>" ondrop="drop(event,this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px">
													<img src="<?php echo base_url(); ?>img/img<?php echo "$i"; ?>.jpg" class="img-thumbnail" id="foto_cbs_<?php echo "$i";?>" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px">	
												</div>
											</center>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
	  				</center>
				</div>
			</div>
			<div id="menu2" class="tab-pane fade">
				<div id="field_bagan" class="col-sm-10 col-md-10 col-lg-10">
					<div class="tree">
						<ul>
							<li>
								<table>
									<caption><center>Ketua BE</center></caption>
									<tbody>
										<tr>
											<td>
												<center>
		                  							<div id="jawaban17" class="receiver" ondrop="drop17(event,this)" ondragover="allowDrop(event)"></div>
													<input type="hidden" name="be[ketua_be][link_foto]" value="" id="foto_ketua_be"><br>
												</center>
											</td>
										</tr>
										<tr>
											<td><input type="text" name="be[ketua_be][nama]" id="nama1" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
								<ul>
									<li>
										<table>
											<caption><center>Wakil Ketua BE</center></caption>
											<tbody>
												<tr>
													<td>
														<center>
		                  									<div id="jawaban18" class="receiver" ondrop="drop18(event,this)" ondragover="allowDrop(event)"></div>
															<input type="hidden" name="be[waketu_be][link_foto]" value="" id="foto_waketu_be"><br>
														</center>
													</td>
												</tr>
												<tr>
													<td><input type="text" name="be[waketu_be][nama]" id="nama2" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption><center>Kepala Biro ADK</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban19" class="receiver" ondrop="drop19(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kabir_adk][link_foto]" value="" id="foto_kabir_adk"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kabir_adk][nama]" id="nama3" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Biro Keuangan</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban20" class="receiver" ondrop="drop20(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kabir_uang][link_foto]" value="" id="foto_kabir_uang"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kabir_uang][nama]" id="nama4" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Departemen Kaderisasi</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban21" class="receiver" ondrop="drop21(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kadep_psdm][link_foto]" value="" id="foto_kadep_psdm"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_psdm][nama]" id="nama5" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Departemen PO</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban22" class="receiver" ondrop="drop22(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kadep_po][link_foto]" value="" id="foto_kadep_po"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_po][nama]" id="nama6" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Departemen Hubin</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban23" class="receiver" ondrop="drop23(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kadep_hubin][link_foto]" value="" id="foto_kadep_hubin"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_hubin][nama]" id="nama7" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Departemen Hubeks</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban24" class="receiver" ondrop="drop24(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kadep_hubeks][link_foto]" value="" id="foto_kadep_hubeks"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_hubeks][nama]" id="nama8" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Departemen Litbang</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban25" class="receiver" ondrop="drop25(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kadep_litbang][link_foto]" value="" id="foto_kadep_litbang"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_litbang][nama]" id="nama9" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Departemen Medinfo</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban26" class="receiver" ondrop="drop26(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kadep_medinfo][link_foto]" value="" id="foto_kadep_medinfo"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_medinfo][nama]" id="nama10" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Departemen Kewirausahaan</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban27" class="receiver" ondrop="drop27(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kadep_wirus][link_foto]" value="" id="foto_kadep_wirus"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_wirus][nama]" id="nama11" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Departemen Agama</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban28" class="receiver" ondrop="drop28(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kadep_agama][link_foto]" value="" id="foto_kadep_agama"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_agama][nama]" id="nama12" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Departemen Keprofesian</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban29" class="receiver" ondrop="drop29(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kadep_keprof][link_foto]" value="" id="foto_kadep_keprof"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_keprof][nama]" id="nama13" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption><center>Kepala Departemen Minat dan Bakat</center></caption>
													<tbody>
														<tr>
															<td>
																<center>
		                  											<div id="jawaban30" class="receiver" ondrop="drop30(event,this)" ondragover="allowDrop(event)"></div>
																	<input type="hidden" name="be[kadep_miba][link_foto]" value="" id="foto_kadep_miba"><br>
																</center>
															</td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_miba][nama]" id="nama14" placeholder="Nama"></td>
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
				<div class="col-sm-2 col-md-2 col-lg-2" id="photobar">
					<br><center>
						<table>
							<tbody>
								<?php for ($i=1; $i <= 14; $i++) {  ?>
									<tr>
										<td>
											<center>
												<div id="kotak_be_<?php echo "$i";?>" ondrop="drop(event,this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px">
													<img src="<?php echo base_url(); ?>img/img1.jpg" class="img-thumbnail" id="foto_be_<?php echo "$i";?>" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px">
												</div>
											</center>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</center>
				</div>
			</div>
			<div id="menu3" class="tab-pane fade">
				<div id="field_bagan" class="col-sm-10 col-md-10 col-lg-10">
					<div class="tree">
						<ul>
							<li>
								<table>
									<caption><center>Ketua DPA</center></caption>
									<tbody>
										<tr>
											<td>
												<center>
		                  							<div id="jawaban31" class="receiver" ondrop="drop31(event,this)" ondragover="allowDrop(event)"></div>
													<input type="hidden" name="dpa[ketua_dpa][link_foto]" value="" id="foto_ketua_dpa"><br>
												</center>
											</td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[ketua_dpa][nama]" id="kdpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption><center>Sekretaris DPA</center></caption>
									<tbody>
										<tr>
											<td>
												<center>
		                  							<div id="jawaban32" class="receiver" ondrop="drop32(event,this)" ondragover="allowDrop(event)"></div>
													<input type="hidden" name="dpa[sekretaris_dpa][link_foto]" value="" id="foto_sekretaris_dpa"><br>
												</center>
											</td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[sekretaris_dpa][nama]" id="sdpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption><center>Bendahara DPA</center></caption>
									<tbody>
										<tr>
											<td>
												<center>
		                  							<div id="jawaban33" class="receiver" ondrop="drop33(event,this)" ondragover="allowDrop(event)"></div>
													<input type="hidden" name="dpa[bendahara_dpa][link_foto]" value="" id="foto_bendahara_dpa"><br>
												</center>
											</td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[bendahara_dpa][nama]" id="bdpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption><center>Ketua Komisi I</center></caption>
									<tbody>
										<tr>
											<td>
												<center>
		                  							<div id="jawaban34" class="receiver" ondrop="drop34(event,this)" ondragover="allowDrop(event)"></div>
													<input type="hidden" name="dpa[kakom_1][link_foto]" value="" id="foto_kakom_1"><br>
												</center>
											</td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[kakom_1][nama]" id="k1dpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption><center>Ketua Komisi II</center></caption>
									<tbody>
										<tr>
											<td>
												<center>
		                  							<div id="jawaban35" class="receiver" ondrop="drop35(event,this)" ondragover="allowDrop(event)"></div>
													<input type="hidden" name="dpa[kakom_2][link_foto]" value="" id="foto_kakom_2"><br>
												</center>
											</td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[kakom_2][nama]" id="k2dpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption><center>Ketua Komisi III</center></caption>
									<tbody>
										<tr>
											<td>
												<center>
		                  							<div id="jawaban36" class="receiver" ondrop="drop36(event,this)" ondragover="allowDrop(event)"></div>
													<input type="hidden" name="dpa[kakom_3][link_foto]" value="" id="foto_kakom_3"><br>
												</center>
											</td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[kakom_3][nama]" id="k3dpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2" id="photobar">
					<br><center>
						<table>
							<tbody>
								<?php for ($i=1; $i <= 6; $i++) {  ?>
									<tr>
										<td>
											<center>
												<div id="kotak_dpa_<?php echo "$i";?>" ondrop="drop(event,this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px">
													<img src="<?php echo base_url(); ?>img/img1.jpg" class="img-thumbnail" id="foto_dpa_<?php echo "$i";?>" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px">
												</div>
											</center>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</center>
				</div>
			</div>
			<div id="menu4" class="tab-pane fade">
				<div id="field_bagan" class="col-sm-10 col-md-10 col-lg-10">
					<div class="tree">
						<ul>
							<li>
								<table>
									<caption><center>Presidium 1</center></caption>
									<tbody>
										<tr>
											<td>
												<center>
		                  							<div id="jawaban37" class="receiver" ondrop="drop37(event,this)" ondragover="allowDrop(event)"></div>
													<input type="hidden" name="presidium[presidium_1][link_foto]" value="" id="foto_presidium_1"><br>
												</center>
											</td>
										</tr>
										<tr>
											<td><input type="text" name="presidium[presidium_1][nama]" id="p1" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption><center>Presidium 2</center></caption>
									<tbody>
										<tr>
											<td>
												<center>
		                  							<div id="jawaban38" class="receiver" ondrop="drop38(event,this)" ondragover="allowDrop(event)"></div>
													<input type="hidden" name="presidium[presidium_2][link_foto]" value="" id="foto_presidium_2"><br>
												</center>
											</td>
										</tr>
										<tr>
											<td><input type="text" name="presidium[presidium_2][nama]" id="p2" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption><center>Presidium 3</center></caption>
									<tbody>
										<tr>
											<td>
												<center>
		                  							<div id="jawaban39" class="receiver" ondrop="drop39(event,this)" ondragover="allowDrop(event)"></div>
													<input class="receiverSrc" type="hidden" name="presidium[presidium_3][link_foto]" value="" id="foto_presidium_3"><br>
												</center>
											</td>
										</tr>
										<tr>
											<td><input type="text" name="presidium[presidium_3][nama]" id="p3" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2" id="photobar">
					<br><center>
						<table>
							<tbody>
								<?php for ($i=1; $i <= 3; $i++) {  ?>
									<tr>
										<td>
											<center>
												<div id="kotak_mubes_<?php echo "$i";?>" ondrop="drop(event,this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px">
													<img src="<?php echo base_url(); ?>img/img1.jpg" class="img-thumbnail" id="foto_mubes_<?php echo "$i";?>" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px">
												</div>
											</center>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</center>
				</div>
			</div> 
		</div>
	</div>	
</form>

<script src="<?php echo base_url(); ?>assets/js/dragpack.js" defer></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js" type="text/javascript"></script> -->

<script>
	$ (function(){
		$('#navigation-panel').show();
		$('#toggleNav').click(function(){
		    $('#navigation-panel').slideToggle('fast');
		});

		
	});
</script>