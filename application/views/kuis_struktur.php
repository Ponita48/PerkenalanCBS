<link rel=stylesheet href="<? echo base_url(); ?>assets/css/bootstrap.css">
<link rel=stylesheet href="<? echo base_url(); ?>assets/css/tree-diagram.css">
<style type="text/css" media="screen">
  ul li {
    padding: 0px 0px 0px 10px;
  }
</style>

<div class="row">
  <!-- Navigation Pane : Belum dibikin fixed, belum bisa diminimize -->
  <div class="col-sm-3 col-md-3 col-lg-3" style="overflow: auto; background-color: #DFDFDF; ">
    <div class="container-fluid" id="navigation-pane">
      <nav class="navbar-nav">
        <ul class="nav nav-pills">
          <li class="active"><a href="#menu1" class="tab-content" data-toggle="pill">Panitia CBS Himatif FMIPA Unpad 2017</a></li>
          <li><a href="#menu2" class="tab-content" data-toggle="pill">BE Himatif FMIPA Unpad Kabinet Impresif</a></li>
          <li><a href="#menu3" class="tab-content" data-toggle="pill">DPA Himatif FMIPA Unpad Parlemen Insight</a></li>
          <li><a href="#menu4" class="tab-content" data-toggle="pill">Mubes Himatif FMIPA Unpad 2017</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- End of Navigation Pane -->

  <!-- Quiz Layer, dengan tab-content -->
  <div class="col-sm-9 col-md-9 col-lg-9">
  	<h3>KUIS BK/PANITIA</h3>
    <div class="tab-content">
      <div id="menu1" class="tab-pane fade in active">
        <div class="row" style="overflow: auto; height: 60vh;">
          <form action="" method="post">
            <div class="tree">
              <ul>
                <li>
                  <table>
                    <caption>Project Officer</caption>
                    <tbody>
                      <tr>
                        <td id="foto_po_cbs" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                        </td>
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
                            <td id="foto_sekretaris_cbs" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                            </td>
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
                            <td id="foto_bendahara_cbs" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                            </td>
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
                            <td id="foto_kabid1_cbs" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                            </td>
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
                                <td id="foto_kadiv_humas" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                                </td>
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
                                <td id="foto_kadiv_acara" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                                </td>
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
                                <td id="foto_kadiv_pk" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                                </td>
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
                            <td id="foto_kabid2_cbs" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                            </td>
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
                                <td id="foto_kadiv_medik" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                                </td>
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
                                <td id="foto_kadiv_akademi" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                                </td>
                              </tr>
                              <tr>
                                <td><input type="text" name="nama_kadiv_akademi" id="akad" placeholder="Nama"></td>
                              </tr>
                            </tbody>
                          </table>
                        </li><li>
                          <table>
                            <caption>Ketua Divisi Komdis</caption>
                            <tbody>
                              <tr>
                                <td id="foto_kadiv_komdis" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                                </td>
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
                                <td id="foto_kadiv_rohani" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                                </td>
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
                            <td id="foto_kabid3_cbs" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                            </td>
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
                                <td id="foto_kadiv_logistik" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                                </td>
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
                                <td id="foto_kadiv_dankom" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                                </td>
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
                                <td id="foto_kadiv_pubdok" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px">
                                </td>
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
            <input type="submit">
          </form>
        </div>
        <div class="row" style="overflow: auto;">
          <table>
            <tbody>
              <tr>
                <td id="foto_cbs_1" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img1.jpg" id="drag_cbs_1" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_2" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_2" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_3" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_3" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_4" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_4" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_5" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_5" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_6" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_6" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_7" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_7" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_8" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_8" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_9" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_9" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_10" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_10" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_11" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_11" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_12" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_12" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_13" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_13" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_14" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_14" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_15" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_16" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_cbs_16" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_cbs_16" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div id="menu2" class="tab-pane fade">
        <div class="row" style="overflow: auto; height: 60vh;">
          <form action="" method="post">
            <div class="tree">
              <ul>
                <li>
                  <table>
                    <caption>Ketua BE</caption>
                    <tbody>
                      <tr>
                        <td id="foto_ketua_be" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                            <td id="foto_waketu_be" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kabir_adk" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kabir_uang" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kadep_psdm" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kadep_po" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kadep_hubin" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kadep_hubeks" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kadep_litbang" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kadep_medinfo" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kadep_wirus" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kadep_agama" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kadep_keprof" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                                <td id="foto_kadep_miba" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
            <input type="submit">
          </form>
        </div>
        <div class="row" style="overflow: auto;">
          <table>
            <tbody>
              <tr>
                <td id="foto_be_1" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img1.jpg" id="drag_be_1" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_2" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_2" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_3" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_3" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_4" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_4" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_5" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_5" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_6" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_6" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_7" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_7" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_8" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_8" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_9" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_9" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_10" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_10" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_11" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_11" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_12" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_12" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_13" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_13" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_be_14" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_be_14" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div id="menu3" class="tab-pane fade">
        <div class="row" style="overflow: auto; height: 60vh;">
          <form action="" method="post">
            <div class="tree">
              <ul>
                <li>
                  <table>
                    <caption>Ketua DPA</caption>
                    <tbody>
                      <tr>
                        <td id="foto_ketua_dpa" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                        <td id="foto_sekretaris_dpa" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                        <td id="foto_bendahara_dpa" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                        <td id="foto_kakom_1" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                        <td id="foto_kakom_2" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                        <td id="foto_kakom_3" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="nama_kakom_3" id="k3dpa" placeholder="Nama"></td>
                      </tr>
                    </tbody>
                  </table>
                </li>
              </ul>
            </div>
            <input type="submit">
          </form>
        </div>
        <div class="row" style="overflow: auto;">
          <table>
            <tbody>
              <tr>
                <td id="foto_dpa_1" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img1.jpg" id="drag_dpa_1" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_dpa_2" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_dpa_2" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_dpa_3" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_dpa_3" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_dpa_4" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_dpa_4" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_dpa_5" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_dpa_5" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_dpa_6" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_dpa_6" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div id="menu4" class="tab-pane fade">
        <div class="row" style="overflow: auto; height: 60vh;">
          <form action="" method="post">
            <div class="tree">
              <ul>
                <li>
                  <table>
                    <caption>Presidium 1</caption>
                    <tbody>
                      <tr>
                        <td id="foto_presidium_1" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                        <td id="foto_presidium_2" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
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
                        <td id="foto_presidium_3" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 81px; width: 108px"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="nama_presidium_3" id="p3" placeholder="Nama"></td>
                      </tr>
                    </tbody>
                  </table>
                </li>
              </ul>
            </div>
            <input type="submit">
          </form>
        </div>
        <div class="row" style="overflow: auto;">
          <table>
            <tbody>
              <tr>
                <td id="foto_mubes_1" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img1.jpg" id="drag_mubes_1" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_mubes_2" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_mubes_2" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
                <td id="foto_mubes_3" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="<? echo base_url(); ?>img/img2.jpg" id="drag_mubes_3" draggable="true" ondragstart="drag(event)" style="width: 90px; height: 120px"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> 
    </div>
  </div>
</div>
<script src="<? echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<? echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript">
	function allowDrop(ev) {
	    ev.preventDefault();
	}
	function drag(ev) {
	    ev.dataTransfer.setData("text", ev.target.id);
	}
	function drop(ev) {
	    ev.preventDefault();
	    var data = ev.dataTransfer.getData("text");
	    ev.target.appendChild(document.getElementById(data));
	}
</script>