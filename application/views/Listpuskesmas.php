
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
              <h4 class="mb"><i class="fa fa-angle-right"></i>List Puskesmas</h4>
             <?php echo form_open('Puskesmas/'); ?>
                
                <div class="form-group">
                <div class="col-sm-12" align="right">

                 <a href="<?php echo site_url()?>/puskesmas/tambahPuskesmas"><button type="submit" class="btn btn-outline-primary">Tambah Puskesmas  <span class="glyphicon glyphicon-plus"></button></a>

                  <br><br>
                  </div>
                </div>

                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th colspan="6" ><center><h1> Daftar Puskesmas Kota Batu </h1></center> </th>
            </tr>
                <tr>
                  
                    <th>ID</th>
                    <th>Nama Puskesmas</th>
                    <th>Alamat Puskesmas</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
 
                <?php foreach ($object as $data){ ?>
               <tr>

                    <td><?php echo $data->idPuskesmas ?></td>
                    <td><?php echo $data->namaPuskes ?></td>
                    <td><?php echo $data->alamatPuskes ?></td>
                    <td><?php echo $data->status ?></td>

                     <td>
                      <a href="javascript:void(0);" onclick="showmodal('<?php echo $data->idPuskesmas?>','<?php echo $data->namaPuskes?>','<?php echo $data->alamatPuskes ?>','<?php echo $data->status ?>')" data-toggle="modal" data-target="#myModalEdit">
                         <button class="btn btn-outline-primary"><span class="glyphicon glyphicon-pencil"></span></button>
                      </a>
                    </td>

                      <td>

                      <a href="<?php echo site_url()?>/Puskesmas/Delete/<?php echo $data->idPuskesmas ?>">
                      <button class="btn btn-outline-primary"><span class="glyphicon glyphicon-trash"></span></button>
                      </a>

                    </td>
           
                  
              </tr>
             <?php }?> 

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
    
    <!--footer end-->
  </section>

  <script type="text/javascript">
    function showmodal(idPuskesmas,namaPuskes,alamatPuskes,status){
        document.getElementById('idPuskesmas').value = idPuskesmas;
        document.getElementById('namaPuskes').value = namaPuskes;
        document.getElementById('alamatPuskes').value = alamatPuskes;
        document.getElementById('status').value = status;
    }
  </script>

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
