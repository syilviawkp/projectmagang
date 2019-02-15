<!--sidebar end-->
    <!-- ****************************************************
        MAIN CONTENT
        ***************************************************** -->
    <!--main content start-->

    <section id="main-content">
       <div class="col-lg-12">
      <section class="wrapper">
        <div class="row">
          <div class="row mt">
       
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Laporan PSDK</h4>
             
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Bulan</label>
                  <div class="col-sm-10">
                     <select class="form-control" name="bulan" id="bulan">
                
                  <?php 
                  $daftarBulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
                  foreach ($daftarBulan as $key) {
                  if($key== $bulan){?>
                    <option value="<?php echo $key?>" selected=""><?php echo $key?></option>
                 <?php }}?>
                  
                 
                </select>
                  </div>
                </div>
                <div class="form-group"><br><br><br>
                  <label class="col-sm-2 col-sm-2 control-label">Tahun</label>
                  <div class="col-sm-10">
                   <select class="form-control" name="tahun" id="tahun">
                  <option value="">--Pilih Tahun--</option>
                  <?php for($i=2019 ; $i<=2025;$i++){
                    if($i==$tahun){?>
                  
                  <option value="<?php echo $i?>" selected=""><?php echo $i?></option>
            <?php   } } ?>
                
                </select><br>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-sm-12" align="right">
              
    
               
                           <br><br>
                  </div>
                </div>
           



   <?php echo form_open('LaporanYankes/saveEditLaporan');?> 
    <input type="text" name="puskesmas" value="<?php echo $puskesmas?>" hidden="">
    <input type="text" name="bulan" value="<?php echo $bulan?>" hidden="">
    <input type="text" name="tahun" value="<?php echo $tahun ?>" hidden="">
    
    
                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th colspan="4" ><center>Absen Laporan PSDK Bulan <?php echo "$bulan "; echo $tahun?> </center> </th>

            </tr>
                <tr>
                    <th></th>
                    <th><?php echo $puskesmas?></th>
                    <th>TEPAT WAKTU</th>
                    <th>SUSULAN</th>
                   
                </tr>
            </thead>
            <tbody align="center">
            <?php foreach($kategori as $key){?>
              <tr>
                  <td colspan="6"><?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporan as $data) {
                 $field=$data->namaField;
                  $field2= str_replace(' ', '', $field);
                    $field2=str_replace('.', '',$field2);
                if($key->namaKategori==$data->namaKategori){?>
                <input type="text" name="idLaporan" value="<?php echo $data->idLaporan?>" hidden="">
              <tr>
                <td><?php echo $data->namaField?></td>
                      <?php if($data->$puskesmas == "SUDAH") {?>   
                <td>
                <input type="checkbox" name="<?php echo "$field2" ?>" value="SUDAH" checked=""></td>
              <?php }else{?>
                <td><input type="checkbox" name="<?php echo "$field2" ?>" value="SUDAH" ></td>

              <?php }
                $terima = $data->terima;
                $susulan = $data->susulan;
                $terima0 = explode("[", $terima);
               if(empty($terima0[1])){
                  $terima4="";
                }else{
                  foreach($terima0 as $terima2){
                    if(!empty($terima2)){
                      $terima3= explode(":", $terima2);
                      
                      if($terima3[0]==$puskesmas){
                        $terima4=$terima3[1];
                        $terima4=str_replace(']', '',  $terima4);
                        break;

                      }else{
                      $terima4="";
                    }
                  }else{
                    $terima4="";
                  }
                  }
                }

                $susulan0=explode("[", $susulan);
                  if(empty($susulan0[1])){
                  $susulan4="";
                }else{
                  foreach($susulan0 as $susulan2){
                    if(!empty($susulan2)){
                      $susulan3= explode(":", $susulan2);
                      
                      if($susulan3[0]==$puskesmas){
                        $susulan4=$susulan3[1];
                        $susulan4=str_replace(']', '',  $susulan4);
                        break;
                      }else{
                      $susulan4="";
                    }
                  }else{
                    $susulan4="";
                  }
                  }
                }
  

               ?>

                <td ><input type="text" name="<?php echo 'msk'."$field2" ?>" style="width: 200px" 
                value="<?php echo $terima4?>"></td>
                <td ><input type="text" name="<?php echo 'ssl'."$field2" ?>" style="width: 200px;" value="<?php echo $susulan4?>"></td>
              </tr>
        <?php }} } ?>

            </tbody>

           
        </table>
        <br> <br>
        <p align="center">
        <input name="status" id="status" value="submit" hidden="">
        <Button type="submit" class="btn btn-success" style="width:250px" id="btnsubmit" onclick="submit()">Submit &nbsp; <span class="glyphicon glyphicon-floppy-save" ></span></Button></p><br>
        
        <p align="center">
        <Button type="submit" class="btn btn-warning" style="width:250px" id="btnsms" onclick="sms()">Submit Dan Kirim SMS &nbsp; <span class="glyphicon glyphicon-send"></span></Button></p>
        
        <?php echo form_close();?>
 
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
      </div>
    </section>
    <!--main content end-->
    <!--footer start-->
  
    <!--footer end-->
  </section>
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class=
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
  <script type="text/javascript">
    function submit(){
      document.getElementById('status').value= "status";
    }

    function sms(){
      document.getElementById('status').value= "sms";
    }
  </script>
</body>

</html>