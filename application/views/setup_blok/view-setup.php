<?php $this->load->view('header'); ?> 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Input Master Blok <small>Unit Produksi Pagilaran</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <button class="btn btn-default" onClick="return redirect('<?php echo base_url("setup_blok/add"); ?>');">Input Master Blok</button>
                    <p class="text-muted font-13 m-b-30">
                      Data yang diinput harap diverifikasi sebelum disimpan, dikarenakan tidak bisa dirubah kembali.
                    </p>
                    </div>
                    <!-- end model -->
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Blok</th>
                          <th>Lokasi</th>
                          <th>Luas</th>
                          <th>Tahun Pangkas</th>
                          <th>Tahun Tanam</th>
                          <th>Populasi Blok</th>
                          <th>Populasi Blok / Hektar</th>
                          <th>Protas / Hektar</th>
                          <th>Klone</th>
                          <th>Kemiringan</th>
                          <th>Ketinggian</th>
                          <th>Jenis Tanah</th>
                          <th>OPT Dominan</th>
                          <th>Teknis Petik</th>
                          <th>Gilir Petik</th>
                          <th colspan="2">Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                       
                        <?php 
                        $no = 1;
                        foreach($blok as $row){ 
                        ?>
                        <tr>
                          <td><?= $no ++?></td>
                          <!-- <td><?= $row->id_blok ?></td> -->
                          <td><?= $row->nama_blok ?></td>
                          <td><?= $row->nama_unit ?></td>
                          <td><?= $row->luas ?></td>
                          <td><?= $row->tahun_pangkas ?></td>
                          <td><?= $row->tahun_tanam ?></td>
                          <td><?= $row->populasi_blok ?></td>
                          <td><?= $row->populasi_hektar ?></td>
                          <td><?= $row->protas_hektar ?></td>
                          <td><?= $row->klone ?></td>
                          <td><?= $row->kemiringan ?></td>
                          <td><?= $row->tinggi ?></td>
                          <td><?= $row->jenis_tanah ?></td>
                          <td><?= $row->opt ?></td>
                          <td><?= $row->teknis_petik ?></td>
                          <td><?= $row->gilir_petik ?></td>
                          <td>
                          <a href="<?= base_url() ?>Setup_coa/updateview/<?= $row->id_blok ?>">Update</a> | 
                            <a href="<?= base_url() ?>Setup_coa/delete/<?= $row->id_blok ?>">Delete</a>
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