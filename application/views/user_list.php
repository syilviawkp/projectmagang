
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
              <h4 class="mb"><i class="fa fa-angle-right"></i> User</h4>

                <div class="form-group">
                <div class="col-sm-12" align="right">
           
                <a href="<?php echo site_url()?>/login/tambahUser"><button type="submit" class="btn btn-success">Tambah User</button></a>
                <!-- <button id="btn-edit" class="btn btn-success" ><<?php ?>/login/create">Tambah user</button></a> -->
                           <br><br>
                  </div>
                </div>
                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
           <center><h1>Kelola User</h1> </center> 
                <tr>
                    <th>ID user</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama Lengkap</th>
                    <th>Nomer HP</th>
                    <th>Jabatan</th>
                    <th>Kode Puskesmas</th>
                    <th>Level user</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                    
                </tr>
            </thead>
            <tbody>   
                  <?php foreach ($user_object as $key){ ?>
                  <tr>
                               
                      <td><?php echo $key->idUser ?></td>
                      <td><?php echo $key->username ?></td>
                      <td><?php echo $key->password ?></td>
                      <td><?php echo $key->nama ?></td>
                      <td><?php echo $key->noHp ?></td>
                      <td><?php echo $key->jabatan ?></td>
                      <td><?php echo $key->idPuskesmas ?></td>
                      <td><?php echo $key->level ?></td>

                       
                        <td><a href="javascript:void(0);" onclick="showmodal('<?php echo $key->idUser ?>','<?php echo $key->username ?>','<?php echo $key->password ?>','<?php echo $key->nama ?>','<?php echo $key->noHp ?>','<?php echo $key->jabatan?>','<?php echo $key->idPuskesmas ?>','<?php echo $key->level ?>')" data-toggle="modal" data-target="#myModalEdit"><button class="btn btn-outline-primary"><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                         <td><a href="<?php echo site_url()?>/Login/Delete/<?php echo $key->idUser ?>"<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td></a>
                        </tr>


                        </tr>


                  <?php } ?>  
                </tbody>

           
        </table>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
      
    </div>
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
    <footer class="site-footer">
      <div class="text-center">
        <p><center>
          &copy; Copyrights<br> <strong>Dinas Kesehatan, Pemerintah Kota Batu</strong>.<br> All Rights Reserved
        </p></center>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          <!-- Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a> -->
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>


  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalEdit" class="modal fade-in" >
        <div class="modal-dialog">
            <div class="modal-content" style="width: 800px; margin-left: -100px;padding: 20px" >
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                </div>
                <?php echo form_open_multipart('Login/update'); ?>
                <?php echo validation_errors(); ?>
                 <div class="form-group">
                    <label for="">Id User</label>
                    <input type="text" class="form-control" name="idUser" id="idUser" value="" readonly="">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="" >
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" id="password" value="" >
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" id="nama" class="form-control" name="nama" value="" >
                </div>
                <div class="form-group">
                    <label for="">No HP</label>
                    <input type="text" id="noHp" class="form-control" name="noHp" value="" >
                </div>
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" id="jabatan" class="form-control" name="jabatan" value="">
                </div>
                <!-- <div class="form-group">
                    <label for="">ID Puskesmas</label>
                    <input type="text" id="idPuskesmas" class="form-control" name="idPuskesmas" value="">
                </div> -->
                <div class="form-group">
                  <label for="">ID Puskesmas</label>
                     <select class="form-control" name="idPuskesmas" id="idPuskesmas">
                  <option value="1" >Batu</option>
                  <option value="2" >Bumiaji</option>
                  <option value="3" >Beji</option>
                  <option value="4" >Junrejo</option>
                  <option value="5" >Sisir</option>
                </div>
              
                 <div class="form-group">
                    <label for="">Level</label>
                    <input type="text" id="level" class="form-control" name="level" value="">
                </div>
               <div align="right" style="margin-bottom: 20px; margin-right: 30px">
          <button class="btn-info" type="submit">Update</button>
            <a href=""><button class="btn-warning" data-dismiss="modal">Batal</button></a>
        </div>
    
        <?php echo form_close(); ?>
    </div>
            
            </div>
  
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

    <script type="text/javascript">
    function showmodal(idUser,username,password,nama,noHp,jabatan,idPuskesmas,level){
        document.getElementById('idUser').value = idUser;
        document.getElementById('username').value = username;
        document.getElementById('password').value = password;
        document.getElementById('nama').value = nama;
        document.getElementById('noHp').value = noHp;
        document.getElementById('jabatan').value = jabatan;
        document.getElementById('idPuskesmas').value = idPuskesmas;
        document.getElementById('level').value = level;
    }
  </script>
  <script type="text/javascript">
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
  </script>
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
