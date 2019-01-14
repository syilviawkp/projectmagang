
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
             <?php echo form_open('Login/data'); ?>
     
                <div class="form-group">
                <div class="col-sm-12" align="right">
                <?php echo form_close();?>  <a href="" data-toggle="modal" data-target="#myModal">
                <button id="btn-edit" class="btn btn-success" >Edit</button></a>
                           <br><br>
                  </div>
                </div>
                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th colspan="6" ><center><h1>Kelola User</h1> </center> </th>
            </tr>
                <tr>
                    <th>ID user</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan</th>
                    <th>Nomer HP</th>
                    <th>Kode Puseksmas/th>
                    <th>Level user</th>
                    
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
                      <td><?php echo $key->noHp ?></td>
                      <td><?php echo $key->idPuskesmas ?></td>
                      <td><?php echo $key->level ?></td>

                         <td><a href="<?=site_url()?>/login/Update/<?php echo $key->idUser ?>"<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td></a>
                         <td><a href="<?=site_url()?>/login/delete/<?php echo $key->idUser ?>"<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td></a>
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
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Absen Laporan</h4>
                </div>
     <?php echo form_open('LaporanKesga/editLaporan'); ?>
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
                <div class="form-group">
                    <label for="">Puskesmas</label>
                    <select class="form-control" name="puskesmas" id="puskesmas">
                  <option value="Batu" >Batu</option>
                  <option value="Beji" >Beji</option>
                  <option value="Bumiaji" >Bumiaji</option>
                  <option value="Junrejo" >Junrejo</option>
                  <option value="Sisir" >Sisir</option>
                  </select>
                   
                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
                <?php echo form_close();?>
        </div>
        </div>
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