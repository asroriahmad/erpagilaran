<?php $this->load->view('header'); ?> 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Input Produksi Basah <small> Unit Produksi Pagilaran</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Produksi Basah <small> Data yang diinput harap diverifikasi sebelum disimpan, dikarenakan tidak bisa dirubah kembali.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="col-md-5">
                        <form class="form-horizontal form-label-left input_mask" method="post" action="<?php echo base_url().'Produksi_basah/insert'; ?>">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                           
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="id_produksi"  placeholder="No. Ref Produksi" >
                            <span class="fa fa-check form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="date" class="form-control has-feedback-left" id="inputSuccess4" name="tanggal" placeholder="Date">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <select id="heard" class="form-control has-feedback-left" required name="id_afdeling">
                            <option value="">Afdeling</option>
                            <?php foreach ($afdeling as $row){ ?>
                                <option value="<?= $row->id_afdeling;?>"><?= $row->nama_afdeling ?></option>
                            <?php } ?>
                          </select>

                          <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" name="harga" placeholder=" Harga Pucuk ">
                            <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hasil (Kg) * : </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" required="required" name="hasil" placeholder="Produksi Pucuk">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kwalitas (Ms) * : </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" required="required" name="kualitas" placeholder="Kwalitas (Ms)">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan * : </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                               <textarea id="message" required="required" class="form-control" name="deskripsi" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10"></textarea>
                            </div>
                          </div>

                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success" value="save">Simpan</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-md-7">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Petunjuk Cara Mengisi Data Produksi </h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <h4>Produksi Basah <small> Unit Produksi pagilaran</small></h4>
                            <p>- Also you can give a default rating by adding attribute data-rating, Also you can give a default rating by adding attribute data-rating</p>

                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php $this->load->view('footer'); ?> 