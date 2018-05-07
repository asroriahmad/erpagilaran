<?php $this->load->view('header'); ?> 
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Produksi Basah <small> Unit Produksi Pagilaran</small></h3>
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
                    <h2>Produksi Basah <small> Data yang diinput harap diverifikasi sebelum disimpan, dikarenakan tidak bisa dirubah kembali.</small></h2>
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
                     <div class="row tile_count">
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-user"></i> Produksi Unit Produksi Pagilaran</span>
                          <div class="count green"><?php echo number_format($total_basah, 2) ?></div>
                          <span class="count_bottom">Kg Pucuk Basah</span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-clock-o"></i> Produksi Pucuk Pagilaran</span>
                          <div class="count">45.000</div>
                          <span class="count_bottom"> Kg Pucuk </span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-clock-o"></i> Produksi Pucuk Andongsili</span>
                          <div class="count">45.000</div>
                          <span class="count_bottom"> Kg Pucuk </span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-clock-o"></i> Produksi Pucuk Kayulandak</span>
                          <div class="count">45.000</div>
                          <span class="count_bottom"> Kg Pucuk </span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-clock-o"></i> Produksi Pucuk Unit Lain</span>
                          <div class="count">45.000</div>
                          <span class="count_bottom"> Kg Pucuk </span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-clock-o"></i> Produksi Pucuk Karyawan</span>
                          <div class="count">45.000</div>
                          <span class="count_bottom"> Kg Pucuk </span>
                        </div>
                        
                      </div>

                    <div class="well" style="overflow: auto">
                      <div class="col-md-4">
                        <div id="reportrange_right" class="pull-left"  >
                          <button class="btn btn-primary" onClick="return redirect('<?php echo base_url("Produksi_basah/add"); ?>');">Input Produksi Basah</button>
                        </div>
                      </div>
                      <div class="col-md-4">
                       <!-- <?= $total_basah ?> -->
                      </div>
                      <div class="col-md-4">
                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                        </div>
                      </div>
                    </div>

                    <!-- start project list -->
                    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        
                        <tr>
                          <th style="width: 10%">No.Ref Pro</th>
                          <th>Tanggal</th>
                          <th>Quantity (Kg)</th>
                          <th>Kwalitas (Ms)</th>
                          <th>Status Kebun</th>
                          <th>Keterangan</th>
                          <th style="width: 10%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach($produksi_basah as $row){ 
                        ?>
                        <tr>
                          <td>R.PRO- <?= $no ++?></td>
                          <td><?= date('d F Y', strtotime($row->tanggal)) ?></td>
                          <td><?= $row->hasil ?></td>
                          <td><?= $row->kualitas ?></td>
                          <td><?= $row->nama_afdeling ?></td>
                          <td><?= $row->deskripsi ?></td>
                          <td>
                            <!-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a> -->
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php $this->load->view('footer'); ?> 