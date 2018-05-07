<?php $this->load->view('header'); ?> 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Master Afdeling<small>Unit Produksi Pagilaran</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <form  method="post" action="<?php echo base_url().'setup_afdeling/insert'; ?>">
                          <label for="fullname">No.* :</label>
                          <input type="text" id="#" class="form-control" name="id_afdeling" required />
                          </p>
                          <label for="email">Nama Afdeling * :</label>
                          <input type="text" id="#" class="form-control" name="nama_afdeling" data-parsley-trigger="change" required />
                          </p>
                          <label for="email">Unit Produksi * :</label>
                            <select id="heard" class="form-control" required name="id_unit">
                              <option value="">Choose..</option>
                             <?php foreach ($afdeling as $row){ ?>
                                  <option value="<?= $row->id_unit;?>"><?= $row->nama_unit ?></option>
                              <?php } ?> 
                            </select>
                          </p>
                          <label for="email">Luas * :</label>
                          <input type="text" id="#" class="form-control" name="luas" data-parsley-trigger="change" required />
                          </p>
                          <br>
                          <div class="modal-footer">
                            <button class="btn btn-default" onClick="return redirect('<?php echo base_url("Setup_unit"); ?>');">Close</button>
                            <button type="submit" value="Tambah" class="btn btn-primary">Save</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- page content 1 -->
<?php $this->load->view('footer'); ?> 