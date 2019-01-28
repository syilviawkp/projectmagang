<?php $this->load->view('headeruser');?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
                <div class="form-group">
                <div class="col-sm-12" align="right">
              
                <!-- <button id="btn-edit" class="btn btn-success" >Tambah user</button></a> -->
                           <br><br>
                  </div>
                </div>
                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>

               <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                                <center><h2>Edit Profil</h2> </center> 

                                <?php echo validation_errors(); ?>

                                <?php echo form_open_multipart('login/updateprofil/'.$this->uri->segment(3)); ?>
                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="username">Username : </label>
                                    <div class="col-sm-12">
                                        <input type="text" name="username" class="form-control" id="username" value="<?php echo $user[0]->username ?>" placeholder="Username"><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="password">Password : </label>
                                    <div class="col-sm-12">
                                        <input type="text" name="password" class="form-control" id="password" value="<?php echo $user[0]->password ?>" placeholder="Password"><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="nama">Nama Lengkap : </label>
                                    <div class="col-sm-12">
                                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $user[0]->nama ?>" placeholder="Nama Lengkap"><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="noHp">No HP : </label>
                                    <div class="col-sm-12">
                                        <input type="text" name="noHp" class="form-control" id="noHp" value="<?php echo $user[0]->noHp ?>" placeholder="No HP"><br>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="control-label col-sm-5" for="idPuskesmas">ID Puskesmas : </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="idPuskesmas" class="form-control" id="idPuskesmas" value="<?php echo $user[0]->idPuskesmas ?>" placeholder="ID Puskesmas"><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="username">Level : </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="level" class="form-control" id="level" value="<?php echo $user[0]->level ?>" placeholder="Level"><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="username">Jabatan : </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?php echo $user[0]->jabatan ?>" placeholder="Jabatan"><br>
                                    </div>
                                </div> -->

                                <div class="form-group">
                                    <div class="col-sm-offset-5 col-sm-10">
                                    <div class="col-sm-10">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                    <?php echo form_close(); ?>
                                    </div>
                                </div>
        </div>
      
    </div>
    <?php echo form_close(); ?>
<script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>

        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
   <!--  <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer> -->
    <!--footer end-->
  </section>
  
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url()?>assets/lib/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url()?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url()?>assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url()?>assets/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url()?>assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>assets/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url()?>assets/lib/common-scripts.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="<?php echo base_url()?>assets/lib/sparkline-chart.js"></script>
  <script src="<?php echo base_url()?>assets/lib/zabuto_calendar.js"></script>
  <!-- <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: "<?php echo base_url()?>assets/img/ui-sam.jpg",
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script> -->
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
               legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
