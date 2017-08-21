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
		                  							<div class="receiver"></div>
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
		                  							<div class="receiver"></div>
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
		                  							<div class="receiver"></div>
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
		                  							<div class="receiver"></div>
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
		                  							<div class="receiver"></div>
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
		                  							<div class="receiver"></div>
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
					<center>
						<table>
							<tbody>
								<?php for ($i=1; $i <= 6; $i++) {  ?>
									<tr>
										<td id="kotak_dpa_<?php echo "$i";?>" style="height: 155px; min-width: 115px"><img src="<?php echo base_url(); ?>img/img1.jpg" class="img-thumbnail" id="foto_dpa_<?php echo "$i";?>" style="width: 90px; height: 120px"></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</center>
				</div>