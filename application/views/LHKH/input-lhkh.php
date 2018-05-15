<?php $this->load->view('header'); ?> 
        <!-- page content -->
         <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Input LHKH <small> Unit Produksi Pagilaran</small></h3>
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
                    <h2>Input LHKH <small> Data yang diinput harap diverifikasi sebelum disimpan, dikarenakan tidak bisa dirubah kembali.</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="col-md-4">
                        <form class="form-horizontal form-label-left input_mask" method="post" action="<?php echo base_url().'Produksi_basah/insert'; ?>">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name=""  placeholder="No. Chart of Account" >
                            <span class="fa fa-check form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="date" class="form-control has-feedback-left" id="inputSuccess4" name="" placeholder="Date">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <select id="heard" class="form-control has-feedback-left" required name="">
                            <option value="">Mandor</option>
                            <!-- <?php foreach ($afdeling as $row){ ?>
                                <option value="<?= $row->id_afdeling;?>"><?= $row->nama_afdeling ?></option>
                            <?php } ?> -->
                          </select>
                          <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <select id="heard" class="form-control has-feedback-left" required name="">
                            <option value="">Blok</option>
                            <!-- <?php foreach ($afdeling as $row){ ?>
                                <option value="<?= $row->id_afdeling;?>"><?= $row->nama_afdeling ?></option>
                            <?php } ?> -->
                          </select>
                          <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="x_title">
                            <div class="clearfix"></div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hasil (Kg) * : </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="Produksi Pucuk">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kwalitas (Ms) * : </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="Kwalitas (Ms)">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Patok/hektar * : </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="Hasil Luasan Patok/Hektar">
                            </div>
                          </div>

                          <div class="x_title">
                            <div class="clearfix"></div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> HOK (7 jam) * : </label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="HOK">
                            </div>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Harga : </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="Harga">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> HOK (5 jam) * : </label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="HOK">
                            </div>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Harga : </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="Harga">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> HOK Borong * : </label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="HOK">
                            </div>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Harga : </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="Harga">
                            </div>
                          </div>

                          <div class="x_title">
                            <div class="clearfix"></div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Barang Bahan</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <select class="form-control">
                                <option>Choose option</option>
                                <option>Option one</option>
                                <option>Option two</option>
                                <option>Option three</option>
                                <option>Option four</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Liter (satuan) * : </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="Liter">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Kg (satuan) * : </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" required="required" name="" placeholder="Kilogram">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Komentar * : </label>
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
                      <div class="col-md-8">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Data Input LHKH </h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No. Akun</th>
                          <th>Tanggal</th>
                          <th>Mandor</th>
                          <th>Nama Blok</th>
                          <th>HOK</th>
                          <th>Hasil </th>
                          <th>Kualitas (Ms)</th>
                          <th>Jumlah Upah </th>
                        </tr>
                      </thead>

                      <!-- <tbody>
                        <?php 
                        $no = 1;
                        foreach($coa as $row){ 
                        ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row->no_coa ?></td>
                          <td><?= $row->saldo_debit ?></td>
                          <td><?= $row->saldo_kredit ?></td>
                          <td><?= $row->deskripsi ?></td>
                          <td><?= $row->group_by ?></td>
                          <td>
                            <a href="<?= base_url() ?>Setup_coa/updateview/<?= $row->no_coa ?>">Update</a> | 
                            <a href="<?= base_url() ?>Setup_coa/delete/<?= $row->no_coa ?>">Delete</a>
                          </td>         
                          
                        </tr>
                        <?php } ?>
                      </tbody> -->
                    </table>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page content 1 -->
<?php $this->load->view('footer'); ?> 