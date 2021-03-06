<?php $this->load->view('header'); ?> 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Master Unit <small>Unit Produksi Pagilaran</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <button class="btn btn-default" onClick="return redirect('<?php echo base_url("Setup_unit/add"); ?>');">Input Master Unit</button>
                    <p class="text-muted font-13 m-b-30">
                      Data yang diinput harap diverifikasi sebelum disimpan, dikarenakan tidak bisa dirubah kembali.
                    </p>
                    </div>
                    <!-- end model -->
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Unit Produksi</th>
                          <th>Lokasi</th>
                          <th colspan="2">Aksi</th
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                        $no = 1;
                        foreach($unit as $row){ 
                        ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row->nama_unit ?></td>
                          <td><?= $row->lokasi ?></td>
                          <td>
                            <a href="<?= base_url() ?>setup_unit/updateview/">Update</a> | 
                            <a href="<?= base_url() ?>setup_unit/delete/">Delete</a>
                          </td>         
                          
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- page content 1 -->
<?php $this->load->view('footer'); ?> 