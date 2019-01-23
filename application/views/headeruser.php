<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>WEB LAPORAN PUSKESMAS</title>

  <!-- Favicons -->
  <link href="<?php echo base_url()?>/assets/img/logopemkot.png" rel="icon">
  <link href="<?php echo base_url()?>/assets/img/logopemkot.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url()?>/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/lib/gritter/css/jquery.gritter.css" />

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/assets/css/style-responsive.css" rel="stylesheet">
  <script src="<?php echo base_url()?>/assets/lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Min/Max Navigation"></div>
      </div>
      <!--logo start-->
      <a href=<?php echo site_url('Welcome/');?> class="logo"><b>PEMKOT<span>BATU</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <!-- <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li> -->
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <!-- <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?php echo base_url()?>/assets/img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?php echo base_url()?>/assets/img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?php echo base_url()?>/assets/img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?php echo base_url()?>/assets/img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li> -->
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
         <!--  <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li> -->
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href=<?php echo site_url('login/logout');?>>Logout<span class="glyphicon glyphicon-off"></span></a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?php echo base_url()?>/assets/img/logopemkot.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">DINAS KESEHATAN</h5>
          <li class="mt">
            <a class="active" href=<?php echo site_url('User/');?>>
              <i class="fa fa-dashboard"></i>
              <span>Beranda</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Absen Laporan</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo site_url()?>/User/LaporanYankesUser">Laporan Yankes</a></li>
              <li><a href="<?php echo site_url()?>/User/LaporanP2plUser">Laporan P2PL</a></li>
              <li><a href="<?php echo site_url()?>/User/LaporanKesgaUser">Laporan Kesga</a></li>
              
            </ul>
          </li>
         <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Kelola Laporan</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Tambah Laporan Yankes</a></li>
              <li><a href="calendar.html">Tambah Laporan P2PL</a></li>
              <li><a href="" data-toggle="modal" data-target="#modalKesga">Tambah Laporan Kesga</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Cetak</span>
              </a>
            <ul class="sub">
              <li><a href="<?=site_url()?>/cetaklaporan">Cetak Laporan</a></li>
            </ul>
          </li> -->
        <!--   <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Data Puskesmas</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo site_url()?>/Puskesmas">List Puskesmas</a></li>
              
            </ul>
          </li> -->

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Pengaturan</span>
              </a>
            <ul class="sub">
              
              <li><a href="<?php echo site_url()?>/login/editprofil">Edit Profil</a></li>
              
              <!-- <li><a href="javascript:void(0);" onclick="showmodal('<?php echo $key->idUser ?>','<?php echo $key->username ?>','<?php echo $key->password ?>','<?php echo $key->nama ?>','<?php echo $key->noHp ?>')" data-toggle="modal" data-target="#myModalEdit">Edit Profil</a></p> -->

                
            </ul>
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    </section>

<!--modal edit-->
<!-- 
    <div aria-hidden="true" aria-labelledby="myModalEdit" role="dialog" tabindex="-1" id="myModalEdit" class="modal fade-in" >
        <div class="modal-dialog">
            <div class="modal-content" style="width: 800px; height:800px; margin-left: -100px;padding: 20px" >
                <div class="modal-header">
                    <h4 class="modal-title">Edit Profil</h4>
                </div>
                <?php echo form_open_multipart('Login/update'); ?>
                <?php echo validation_errors(); ?>
                <br>
                 <div class="form-group">
                    <label for="">Id User</label>
                    <input type="text" class="form-control" name="idUser" id="idUser" value=""<?php echo $user[0]->nama ?>"" readonly="">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $user[0]->username ?>" >
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" id="password" value="<?php echo $user[0]->password ?>">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" id="nama" class="form-control" name="nama" value="<?php echo $user[0]->nama ?>" >
                </div>
                <div class="form-group">
                    <label for="">No HP</label>
                    <input type="text" id="noHp" class="form-control" name="noHp" value="<?php echo $user[0]->noHp ?>" >
                </div>
                 
               <div align="right" style="margin-bottom: 20px; margin-right: 30px">
          <button class="btn-info" type="submit">Update</button>
            <a href=""><button class="btn-warning" data-dismiss="modal">Batal</button></a>
        </div>
    
        <?php echo form_close(); ?>
    </div>
            
            </div> -->
  
</body>


<!--modal filter-->

     <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalKesga" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Format Laporan</h4>
                </div>
     <?php echo form_open('LaporanKesga/editFieldLaporan'); ?>
    <div class="modal-body">
        <div class="form-group">
                    <label for="">Bulan</label>
                   
                  <select class="form-control" name="bulan" id="bulan">
                  <option value="" >--Pilih Bulan--</option>
                  <?php 
                  $daftarBulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
                  foreach ($daftarBulan as $key) {
                  if($key== $bulan){?>
                    <option value="<?php echo $key?>" selected=""><?php echo $key?></option>
                 <?php }
                  else{?>
                     <option value="<?php echo $key?>" ><?php echo $key?></option>

                  <?php }}?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Tahun</label>
                     <select class="form-control" name="tahun" id="tahun">
                  <option value="">--Pilih Tahun--</option>
                  <?php for($i=2015 ; $i<=2023;$i++){
                    if($i==$tahun){?>
                  
                  <option value="<?php echo $i?>" selected=""><?php echo $i?></option>
            <?php   } else{?>
            <option value="<?php echo $i?>" ><?php echo $i?></option>
                  <?php   }} ?>
                
                </select>
                
                </div>
                <center><button type="submit" class="btn btn-primary">Edit</button></center>
                <?php echo form_close();?>
        </div>
        </div>
        </div></div>

 <script type="text/javascript">
    function showmodal(idUser,username,password,nama,noHp){
        document.getElementById('idUser').value = idUser;
        document.getElementById('username').value = username;
        document.getElementById('password').value = password;
        document.getElementById('nama').value = nama;
        document.getElementById('noHp').value = noHp;
    }
  </script>