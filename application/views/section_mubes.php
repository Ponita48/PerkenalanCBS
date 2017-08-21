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
		                  							<div class="receiver"></div>
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
		                  							<div class="receiver"></div>
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
		                  							<div class="receiver"></div>
													<input type="hidden" name="presidium[presidium_3][link_foto]" value="" id="foto_presidium_3"><br>
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
					<center>
						<table>
							<tbody>
								<?php for ($i=1; $i <= 3; $i++) {  ?>
									<tr>
										<td id="kotak_mubes_<?php echo "$i";?>" style="height: 155px; min-width: 115px"><img src="<?php echo base_url(); ?>img/img1.jpg" class="img-thumbnail" id="foto_mubes_<?php echo "$i";?>" style="width: 90px; height: 120px"></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</center>
				</div>