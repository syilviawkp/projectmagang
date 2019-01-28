<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>SILAPUS</title>

  <!-- Favicons -->
  <link href="<?php echo base_url()?>/assets/img/logosilapus.png" rel="icon">
  <link href="<?php echo base_url()?>/assets/img/logosilapus.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url()?>/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url()?>/assets/css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container" >
      <div class="form-login">
        <h2 class="form-login-heading"><img src="<?php echo base_url()?>/assets/img/silapus.png" class="img-rectangl" width="350"></h2>
        <div class="login-wrap">
        <?php echo form_open('login/cekLogin');?>
       
         <?=$this->session->flashdata('gglLogin')?>
          <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
          <br>
          <input type="password" name="password"class="form-control" placeholder="Password">
          <!-- <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label> -->
        <button class="btn btn-theme btn-block"  style="margin-top: 10px" type="submit"><i class="fa fa-lock"></i> LOGIN</button>
        <?php echo form_close();?>
          <hr>
         <!--  <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div> -->
          <!-- <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="#">
              Create an account
              </a>
          </div> -->
        </div>
        <font color="#000">
        <a href="" data-toggle="modal" data-target="#info">
        <center><span class="glyphicon glyphicon-info-sign"></a></center></span>
        <center>Silapus Ver 1.0</center>
        <center>Created by Tim IT Polinema</center>
        <br>
        </font>
        <br>

        <!-- Modal -->
      <!--   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div> -->
              <!-- <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div> -->
              <!-- <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div> -->
            </div>
          </div>
        </div>
        <!-- modal -->
      </div>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url()?>/assets/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo base_url()?>/assets/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("<?php echo base_url()?>/assets/img/login-bg2.jpg", {
      speed: 500
    });
  </script>


<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="info" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><center>INFORMASI PENGEMBANG</center></h4>
                </div>
    <center><h5>

         <br>
        

            <p>Created by:</p>
        <br>
            <p>MAHASISWA IT POLINEMA</p>
            <p>JAN 2019</p>
            <p>timpolinema@gmail.com</p>

         <br>
         <br>

         </h5>
    </center>
        </div>
        </div>
        </div>
        </div>

</body>

</html>
