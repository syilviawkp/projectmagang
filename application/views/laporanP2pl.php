
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
              <h4 class="mb"><i class="fa fa-angle-right"></i> Laporan P2PL</h4>
             <?php echo form_open('LaporanP2pl/filter'); ?>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Bulan</label>
                  <div class="col-sm-10">
                     <select class="form-control" name="bulan" id="bulan">
                  <option value="" >--Pilih Bulan--</option>
                  <option value="Januari">Januari</option>
                  <option value="Februari">Februari</option>
                  <option value="Maret">Maret</option>
                  <option value="April">April</option>
                  <option value="Mei">Mei</option>
                  <option value="Juni">Juni</option>
                  <option value="Juli">Juli</option>
                  <option value="Agustus">Agustus</option>
                  <option value="September">September</option>
                  <option value="Oktober">Oktober</option>
                  <option value="November">November</option><option value="Desember">Desember</option>
                </select>
                  </div>
                </div>
                <div class="form-group"><br><br><br>
                  <label class="col-sm-2 col-sm-2 control-label">Tahun</label>
                  <div class="col-sm-10">
                   <select class="form-control" name="tahun" id="tahun">
                  <option value="">--Pilih Tahun--</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option><option value="2026">2026</option>
                </select><br>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-sm-12" align="right">
               <button type="submit" id="btn-filter" class="btn btn-primary" >Filter</button>
                           <br><br>
                  </div>
                </div>

               <?php echo form_close();?>
 
                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th colspan="6" ><center>Absen Laporan P2PL Bulan <?php echo $bulan." "; echo $tahun?> </center> </th>
            </tr>
                <tr>
                    <th></th>
                    <th>Batu</th>
                    <th>Beji</th>
                    <th>Bumiaji</th>
                    <th>Junrejo</th>
                    <th>Sisir</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($kategori as $key){?>
              <tr>
                  <td colspan="6"><?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporan as $data) {
                if($key->namaKategori==$data->namaKategori){?>
              <tr>
                <td><?php echo $data->namaField?></td>
                <?php if($data->Batu == "SUDAH") {?>

                <td><input type="checkbox" name="feeling" value="good" checked="" disabled  readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Beji == "SUDAH") {?>
                <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Bumiaji == "SUDAH") {?>
                <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Junrejo == "SUDAH") {?>
                <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Sisir == "SUDAH") {?>
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
         <!--  Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a> -->
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
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
