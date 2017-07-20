<!-- Beginning of Header -->
<link rel=stylesheet href="<?php echo base_url(); ?>assets/css/bootstrap.css">
<link rel=stylesheet href="<?php echo base_url(); ?>assets/css/tree-diagram.css">
<style type="text/css" media="screen">
  #navigasi {
    z-index: 1;
    position: absolute;
  }

  #photobar {
  	overflow: auto; 
  	position: relative; 
  	z-index: 2
  }

  #kotak_foto {
  	background-color: #393636;
  }

  #field_bagan {
  	overflow: auto;
  	height: 70vh;
  }  
</style>
<!-- End of Header -->

<form action="kuis/submit" method="post" accept-charset="utf-8">
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
			<div class="col-sm-10 col-md-10 col-lg-10">
				<center><h3>KUIS BK/PANITIA</h3></center>
			</div>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<center><input class="btn btn-success" type="submit" name="Kirim"></center>
			</div>
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
		                  					<td ondrop="drop1(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[po_cbs][link_foto]" value="" id="foto_po_cbs"></td>
		                  				</tr>
		                  				<tr>
		                  					<td><input type="text" name="panitia[po_cbs][nama]" id="ketua" placeholder="Nama"></td>
		                  				</tr>
	                				</tbody>
	              				</table>
	              				<ul>
	                				<li>
	                  					<table>
	                    					<caption>Sekretaris</caption>
	                    					<tbody>
												<tr>
													<td ondrop="drop2(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[sekretaris_cbs][link_foto]" value="" id="foto_sekretaris_cbs"></td>
												</tr>
												<tr>
													<td><input type="text" name="panitia[sekretaris_cbs][nama]" id="sekre" placeholder="Nama"></td>
												</tr>
											</tbody>
	                  					</table>
	                				</li><li>
										<table>
											<caption>Bendahara</caption>
											<tbody>
												<tr>
													<td ondrop="drop3(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[bendahara_cbs][link_foto]" value="" id="foto_bendahara_cbs"></td>
												</tr>
												<tr>
													<td><input type="text" name="panitia[bendahara_cbs][nama]" id="bendahara" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
									</li><li>
										<table>
											<caption>Ketua Bidang I</caption>
											<tbody>
												<tr>
													<td ondrop="drop4(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kabid1_cbs][link_foto]" value="" id="foto_kabid1_cbs"></td>
												</tr>
												<tr>
													<td><input type="text" name="panitia[kabid1_cbs][nama]" id="kabid1" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption>Ketua Divisi Humas</caption>
													<tbody>
														<tr>
															<td ondrop="drop5(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kadiv_humas_cbs][link_foto]" value="" id="foto_kadiv_humas"></td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_humas_cbs][nama]" id="humas" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Acara</caption>
													<tbody>
														<tr>
															<td ondrop="drop6(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kadiv_acara_cbs][link_foto]" value="" id="foto_kadiv_acara"></td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_acara_cbs][nama]" id="acara" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi PK</caption>
													<tbody>
														<tr>
															<td ondrop="drop7(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kadiv_pk_cbs][link_foto]" value="" id="foto_kadiv_pk"></td>
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
											<caption>Ketua Bidang II</caption>
											<tbody>
												<tr>
													<td ondrop="drop8(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kabid2_cbs][link_foto]" value="" id="foto_kabid2_cbs"></td>
												</tr>
												<tr>
													<td><input type="text" name="panitia[kabid2_cbs][nama]" id="kabid2" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption>Ketua Divisi Medik</caption>
													<tbody>
														<tr>
															<td ondrop="drop9(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kadiv_medik_cbs][link_foto]" value="" id="foto_kadiv_medik"></td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_medik_cbs][nama]" id="medik" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Akademik</caption>
													<tbody>
														<tr>
															<td ondrop="drop10(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kadiv_akademik_cbs][link_foto]" value="" id="foto_kadiv_akademik"></td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_akademik_cbs][nama]" id="akad" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Komdis</caption>
													<tbody>
														<tr>
															<td ondrop="drop11(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kadiv_komdis_cbs][link_foto]" value="" id="foto_kadiv_komdis"></td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_komdis_cbs][nama]" id="komdis" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Rohani</caption>
													<tbody>
														<tr>
															<td ondrop="drop12(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kadiv_rohani_cbs][link_foto]" value="" id="foto_kadiv_rohani"></td>
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
											<caption>Ketua Bidang III</caption>
											<tbody>
												<tr>
													<td ondrop="drop13(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kabid3_cbs][link_foto]" value="" id="foto_kabid3_cbs"></td>
												</tr>
												<tr>
													<td><input type="text" name="panitia[kabid3_cbs][nama]" id="kabid3" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption>Ketua Divisi Logistik</caption>
													<tbody>
														<tr>
															<td ondrop="drop14(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kadiv_logistik_cbs][link_foto]" value="" id="foto_kadiv_logistik"></td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_logistik_cbs][nama]" id="logistik" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Dankom</caption>
													<tbody>
														<tr>
															<td ondrop="drop15(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kadiv_dankom_cbs][link_foto]" value="" id="foto_kadiv_dankom"></td>
														</tr>
														<tr>
															<td><input type="text" name="panitia[kadiv_dankom_cbs][nama]" id="dankom" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Ketua Divisi Pubdok</caption>
													<tbody>
														<tr>
															<td ondrop="drop16(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="panitia[kadiv_pubdok_cbs][link_foto]" value="" id="foto_kadiv_pubdok"></td>
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
				<div class="row" id="photobar">
					<table border="1">
						<tbody>
							<tr>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_cbs_1" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_cbs_2" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_cbs_3" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_cbs_4" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_cbs_5" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_cbs_6" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_cbs_7" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_cbs_8" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_cbs_9" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_cbs_10" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_cbs_11" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_cbs_12" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_cbs_13" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_cbs_14" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_cbs_15" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_cbs_16" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
							</tr>
						</tbody>
					</table>
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
											<td ondrop="drop17(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[ketua_be][link_foto]" value="" id="foto_ketua_be"></td>
										</tr>
										<tr>
											<td><input type="text" name="be[ketua_be][nama]" id="nama1" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
								<ul>
									<li>
										<table>
											<caption>Wakil Ketua BE</caption>
											<tbody>
												<tr>
													<td ondrop="drop18(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[waketu_be][link_foto]" value="" id="foto_waketu_be"></td>
												</tr>
												<tr>
													<td><input type="text" name="be[waketu_be][nama]" id="nama2" placeholder="Nama"></td>
												</tr>
											</tbody>
										</table>
										<ul>
											<li>
												<table>
													<caption>Kepala Biro ADK</caption>
													<tbody>
														<tr>
															<td ondrop="drop19(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kabir_adk][link_foto]" value="" id="foto_kabir_adk"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kabir_adk][nama]" id="nama3" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Biro Keuangan</caption>
													<tbody>
														<tr>
															<td ondrop="drop20(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kabir_uang][link_foto]" value="" id="foto_kabir_uang"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kabir_uang][nama]" id="nama4" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Kaderisasi</caption>
													<tbody>
														<tr>
															<td ondrop="drop21(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kadep_psdm][link_foto]" value="" id="foto_kadep_psdm"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_psdm][nama]" id="nama5" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen PO</caption>
													<tbody>
														<tr>
															<td ondrop="drop22(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kadep_po][link_foto]" value="" id="foto_kadep_po"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_po][nama]" id="nama6" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Hubin</caption>
													<tbody>
														<tr>
															<td ondrop="drop23(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kadep_hubin][link_foto]" value="" id="foto_kadep_hubin"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_hubin][nama]" id="nama7" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Hubeks</caption>
													<tbody>
														<tr>
															<td ondrop="drop24(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kadep_hubeks][link_foto]" value="" id="foto_kadep_hubeks"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_hubeks][nama]" id="nama8" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Litbang</caption>
													<tbody>
														<tr>
															<td ondrop="drop25(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kadep_litbang][link_foto]" value="" id="foto_kadep_litbang"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_litbang][nama]" id="nama9" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Medinfo</caption>
													<tbody>
														<tr>
															<td ondrop="drop26(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kadep_medinfo][link_foto]" value="" id="foto_kadep_medinfo"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_medinfo][nama]" id="nama10" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Kewirausahaan</caption>
													<tbody>
														<tr>
															<td ondrop="drop27(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kadep_wirus][link_foto]" value="" id="foto_kadep_wirus"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_wirus][nama]" id="nama11" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Agama</caption>
													<tbody>
														<tr>
															<td ondrop="drop28(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kadep_agama][link_foto]" value="" id="foto_kadep_agama"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_agama][nama]" id="nama12" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Keprofesian</caption>
													<tbody>
														<tr>
															<td ondrop="drop29(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kadep_keprof][link_foto]" value="" id="foto_kadep_keprof"></td>
														</tr>
														<tr>
															<td><input type="text" name="be[kadep_keprof][nama]" id="nama13" placeholder="Nama"></td>
														</tr>
													</tbody>
												</table>
											</li><li>
												<table>
													<caption>Kepala Departemen Minat dan Bakat</caption>
													<tbody>
														<tr>
															<td ondrop="drop30(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="be[kadep_miba][link_foto]" value="" id="foto_kadep_miba"></td>
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
				<div class="row" id="photobar">
					<table>
						<tbody>
							<tr>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_be_1" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_be_2" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_be_3" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_be_4" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_be_5" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_be_6" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_be_7" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_be_8" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_be_9" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_be_10" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_be_11" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_be_12" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_be_13" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_be_14" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
							</tr>
						</tbody>
					</table>
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
											<td ondrop="drop31(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="dpa[ketua_dpa][link_foto]" value="" id="foto_ketua_dpa"></td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[ketua_dpa][nama]" id="kdpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Sekretaris DPA</caption>
									<tbody>
										<tr>
											<td ondrop="drop32(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="dpa[sekretaris_dpa][link_foto]" value="" id="foto_sekretaris_dpa"></td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[sekretaris_dpa][nama]" id="sdpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Bendahara DPA</caption>
									<tbody>
										<tr>
											<td ondrop="drop33(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="dpa[bendahara_dpa][link_foto]" value="" id="foto_bendahara_dpa"></td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[bendahara_dpa][nama]" id="bdpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Ketua Komisi I</caption>
									<tbody>
										<tr>
											<td ondrop="drop34(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="dpa[kakom_1][link_foto]" value="" id="foto_kakom_1"></td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[kakom_1][nama]" id="k1dpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Ketua Komisi II</caption>
									<tbody>
										<tr>
											<td ondrop="drop35(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="dpa[kakom_2][link_foto]" value="" id="foto_kakom_2"></td>
										</tr>
										<tr>
											<td><input type="text" name="dpa[kakom_2][nama]" id="k2dpa" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Ketua Komisi III</caption>
									<tbody>
										<tr>
											<td ondrop="drop36(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="dpa[kakom_3][link_foto]" value="" id="foto_kakom_3"></td>
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
				<div class="row" id="photobar">
					<table>
						<tbody>
							<tr>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_dpa_1" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_dpa_2" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_dpa_3" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_dpa_4" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_dpa_5" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
								<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_dpa_6" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
							</tr>
						</tbody>
					</table>
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
											<td ondrop="drop37(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="presidium[presidium_1][link_foto]" value="" id="foto_presidium_1"></td>
										</tr>
										<tr>
											<td><input type="text" name="presidium[presidium_1][nama]" id="p1" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Presidium 2</caption>
									<tbody>
										<tr>
											<td ondrop="drop38(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="presidium[presidium_2][link_foto]" value="" id="foto_presidium_2"></td>
										</tr>
										<tr>
											<td><input type="text" name="presidium[presidium_2][nama]" id="p2" placeholder="Nama"></td>
										</tr>
									</tbody>
								</table>
							</li><li>
								<table>
									<caption>Presidium 3</caption>
									<tbody>
										<tr>
											<td ondrop="drop39(event, this)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><input type="hidden" name="presidium[presidium_3][link_foto]" value="" id="foto_presidium_3"></td>
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
				<div class="row" id="photobar">
					<table>
						<tbody>
							<tr>
							<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img1.jpg" id="foto_mubes_1" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
							<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_mubes_2" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
							<td id="kotak_foto" ondrop="drop(event, this)" ondragover="allowDrop(event)" style="height: 155px; min-width: 115px"><center><img src="<?php echo base_url(); ?>img/img2.jpg" id="foto_mubes_3" draggable="true" ondragstart="drag(event)" ondrop="return false" ondragover="return false" style="width: 90px; height: 120px"></center></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> 
		</div>
	</div>
</form>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dragpack.js"></script>