<section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Beranda</h3>
        <div class="row mt">
          <div class="col-lg-12">

          <div class="row">
          <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Jumlah User dan Admin</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
              
                  <footer>
                    <div class="centered">
                      <h3> <?php echo $jumlahuser[0]->jumlahuser ?></h3>
                    </div>
                  </footer>
                </div>
                </div>

          <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Jumlah Puskesmas</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-ambulance fa-3x"></i></h1>
               
                  <footer>
                    <div class="centered">
                      <h3> <?php echo $jumlahpuskesmas[0]->jumlahpuskesmas ?></h3>
                    </div>
                  </footer>
                </div>
                </div>
            <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Sisa Sms Hari Ini</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-send fa-3x"></i></h1>
                
                  <footer>
                    <div class="centered">
                      <h3><?php echo $jumlahsms; ?></h5>
                    </div>
                  </footer>
                </div>
                </div>


       </div>
       <div class="row">
       <div class="col-md-6">
        <div class="showback">
              <h4><i class="fa fa-angle-right"></i> Laporan PSDK <?php foreach ($lastYankes as $yankes ) {?> <?php echo " $yankes->bulan $yankes->tahun";}?></h4>
              <?php foreach ($puskesmas as $key) {?>
              <label>Puskesmas <?php echo $key->namaPuskes; 
              $nama = $key->namaPuskes;
              $x=$dataYankes[$nama];
              $persen=0; 
              if($jumlahyankes!=0){
                  $persen = ($x/$jumlahyankes)*100;
                  }
                     echo " :".$persen."%"?></label>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $persen?>%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
              <?php } ?>
       </div></div>
<div class="col-md-6">
         <div class="showback">
              <h4><i class="fa fa-angle-right"></i> Laporan P2P <?php foreach ($lastP2pl as $p2pl ) {?> <?php echo " $p2pl->bulan $p2pl->tahun";}?></h4>
              <?php foreach ($puskesmas as $key) {?>
              <label>Puskesmas 
              <?php echo $key->namaPuskes; $nama = $key->namaPuskes;
              $x=$dataP2pl[$nama];
              $persen=0; 
              if($jumlahp2pl!=0){
                  $persen = ($x/$jumlahp2pl)*100;
                  } 
                  echo " :".$persen."%"
                  ?>
                    
                  </label>
              <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $persen?>%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
              <?php } ?>
       </div>
</div></div>
       <div class="showback">
              <h4><i class="fa fa-angle-right"></i> Laporan KESMAS <?php foreach ($lastKesga as $kesga ) {?> <?php echo " $kesga->bulan $kesga->tahun";}?></h4>
              <?php foreach ($puskesmas as $key) {?>
              <label>Puskesmas <?php echo $key->namaPuskes; 
              $nama = $key->namaPuskes;
              $x=$dataKesga[$nama];
             $persen=0; 
              if($jumlahkesga!=0){
                  $persen = ($x/$jumlahkesga)*100;
                  } 
                  echo " :".$persen."%";
                  

              ?></label>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $persen?>%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
              <?php } ?>
       </div>


       </div>
       </section>
       </div>
       </section>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url()?>assets/lib/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url()?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url()?>assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url()?>assets/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url()?>assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url()?>assets/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript" src="<?php echo base_url()?>assets/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/lib/gritter-conf.js"></script>
</body>

</html>
