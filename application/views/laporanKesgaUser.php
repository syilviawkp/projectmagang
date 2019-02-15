
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    
       <!--main content start-->
  
    <section id="main-content">
          <div class="col-lg-12"> 
      <section class="wrapper">

        <div class="row">
          <div class="row mt">
     

            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Laporan Kesmas <?php echo  $this->session->userdata('logged_in')['namaPuskes'];?></h4>
             <?php echo form_open('User/filterKesga'); ?>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Bulan</label>
                  <div class="col-sm-10">
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
                </div>
                <div class="form-group"><br><br><br>
                  <label class="col-sm-2 col-sm-2 control-label">Tahun</label>
                  <div class="col-sm-10">
                   <select class="form-control" name="tahun" id="tahun">
                  <option value="">--Pilih Tahun--</option>
                  <?php for($i=2019 ; $i<=2029;$i++){
                    if($i==$tahun){?>
                  
                  <option value="<?php echo $i?>" selected=""><?php echo $i?></option>
            <?php   } else{?>
            <option value="<?php echo $i?>" ><?php echo $i?></option>
                  <?php   }} ?>
                
                </select><br>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-sm-12" align="right">
               <button type="submit" id="btn-filter" class="btn btn-success" ><span class="glyphicon glyphicon-filter" ></span>  Filter</button>
                <?php echo form_close();?>  <!-- <a href="" data-toggle="modal" data-target="#myModal">
                <button id="btn-edit" class="btn btn-primary" ><span class="glyphicon glyphicon-pencil"></span>  Edit Laporan</button></a> -->
                           <br><br>
                  </div>
                </div>

                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th colspan="8" ><center>Absen Laporan Kesmas Bulan <?php echo $bulan." "; echo $tahun?> </center> </th>
            </tr>
                <tr>
                    <th></th>
                    <th><?php echo $this->session->userdata('logged_in')['namaPuskes'];?></th>
                </tr>
            </thead>
            <tbody>
            <?php
            $nama = $this->session->userdata('logged_in')['namaPuskes'];
             foreach($kategori as $key){?>
              <tr>
                  <td colspan="6"><?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporan as $data) {
                if($key->namaKategori==$data->namaKategori){?>
              <tr>
                <td><?php echo $data->namaField?></td>

              <?php if($data-> $nama== "SUDAH") {?>
                <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              </tr>
              <?php }}} ?>



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
 
 </div>
  </section>
 
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
