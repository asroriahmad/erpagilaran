<?php $this->load->view('header'); ?> 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Master Unit<small>Unit Produksi Pagilaran</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <form  method="post" action="<?php echo base_url().'setup_produksi/insert'; ?>">
                          <label for="fullname">No.* :</label>
                          <input type="text" id="#" class="form-control" name="id_jenis_produksi" required />
                          </p>
                          <label for="email">Nama Jenis Produksi * :</label>
                          <input type="text" id="#" class="form-control" name="nama_produksi" data-parsley-trigger="change" required />
                          </p>
                          <label for="email">Deskripsi * :</label>
                          <input type="text" id="#" class="form-control" name="deskripsi" data-parsley-trigger="change" required />
                          </p>
                          
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