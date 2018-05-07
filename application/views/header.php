<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>er pailaran | system for monitoring estate</title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url()?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=base_url()?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="profile">
              <div class="profile_pic">
                <img src="<?=base_url()?>assets/images/pagilaran_logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Administrator</h2>
              </div>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url()?>dashboard"><i class="fa fa-windows"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-credit-card"></i>Financial<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                        
                        <li><a>Transaction<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="#">Cash In</a></li>
                            <li><a href="#">Cash Out</a></li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Report</a>
                        </li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-leaf"></i> Estate <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                        
                        <li><a>Transaction<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?=base_url()?>rencana_kerja">Rencana Kerja</a></li>
                            <li><a href="<?=base_url()?>Input_LHKH">LHKH</a></li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Report</a>
                        </li>
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-leaf"></i> Estate <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Transaction</a></li>
                      <li><a href="#">Report</a></li>
                    </ul>
                  </li> -->
                  <li><a><i class="fa fa-line-chart"></i> Production <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                        
                        <li><a>Transaction<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?=base_url()?>produksi_basah">Produksi Basah</a></li>
                            <li><a href="<?=base_url()?>produksi_kering">Produksi Kering</a></li>
                            <li><a href="<?=base_url()?>produksi_sortasi">Produksi Sortasi</a></li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Report</a>
                        </li>
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-line-chart"></i> Production <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Transaction</a></li>
                      <li><a href="#">Report</a></li>
                    </ul>
                  </li> -->
                  <li><a><i class="fa fa-table"></i> Commercial <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Transaction</a></li>
                      <li><a href="#">Report</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-institution"></i> Warehouse <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Transaction</a></li>
                      <li><a href="#">Report</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">General Report</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu"> 
                  <li><a><i class="fa fa-cogs"></i> Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                        
                        <li><a>Setup Office<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="#">Chart of Account</a></li>
                            <li><a href="#">Budgeting Office</a></li>
                            <li><a href="#">Custemer</a></li>
                            <li><a href="#">Suplayer</a></li>
                            <li><a href="#">Treder</a></li>
                          </ul>
                        </li>
                        <li><a>Setup Estate<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?=base_url()?>setup_coa">Chart of Account</a></li>
                            <li><a href="<?=base_url()?>setup_coa">Budgeting Estate</a></li>
                            <li><a href="<?=base_url()?>setup_unit">Setup Unit</a></li>
                            <li><a href="<?=base_url()?>setup_afdeling">Setup Afdeling</a></li>
                            <li><a href="<?=base_url()?>setup_mandor">Setup Mandor</a></li>
                            <li><a href="<?=base_url()?>setup_karywan">Setup Karyawan</a></li>
                            <li><a href="<?=base_url()?>setup_kegiatan">Setup Kegiatan</a></li>
                            <li><a href="<?=base_url()?>setup_blok">Setup Blok</a></li>
                            <li><a href="<?=base_url()?>setup_komoditi">Setup Komoditi</a></li>
                            <li><a href="<?=base_url()?>setup_produksi">Setup Produksi</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Setup User</a></li>
                        <li><a href="#">Setup Profile Company</a></li>
                    </ul>
                  </li>              
                  <li><a href="plain_page.html"><i class="fa fa-laptop"></i> Plain Page </a></li>
                  <li><a href="input_produksi.html"><i class="fa fa-laptop"></i> Form Input </a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Administrator
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
