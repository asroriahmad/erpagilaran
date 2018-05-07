<?php $this->load->view('header'); ?> 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Chart of Accounts <small>Unit Produksi Pagilaran</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">


                                <form  method="post" action="<?php echo base_url().'Setup_coa/tambah_aksi'; ?>">
                                  <label for="fullname">No Chart of Account * :</label>
                                  <input type="text" id="#" class="form-control" name="no_coa" required />
                                  </p>
                                  <label for="email">Saldo Debit * :</label>
                                  <input type="text" id="#" class="form-control" name="saldo_debit" data-parsley-trigger="change" required />
                                  </p>
                                  <label for="email">Saldo Kredit * :</label>
                                  <input type="text" id="#" class="form-control" name="saldo_kredit" data-parsley-trigger="change" required />
                                  </p>
                                  <label name="group_by" for="heard">Group by *:</label>
                                  <select name="group_by" id="group_by" class="form-control" required>
                                    <option value="group_by">Choose..</option>
                                    <option value="press">INVESTASI</option>
                                    <option value="net">EXSPOLITASI</option>
                                  </select>
                                  </p>
                                  <label for="message">Deskripsi (20 chars min, 100 max) :</label>
                                  <textarea id="message" required="required" class="form-control" name="deskripsi" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                    data-parsley-validation-threshold="10"></textarea>
                                    <div class="modal-footer">
                                      <button class="btn btn-default" onClick="return redirect('<?php echo base_url("Setup_coa"); ?>');">Close</button>
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