
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
            <div class="form-panel" >
              <h4 class="mb"><i class="fa fa-angle-right"></i> Puskesmas</h4>

                <div class="form-group">
                <div class="col-sm-12" align="right">
           
                     <a href="<?php echo site_url()?>/Puskesmas/tambahPuskesmas"><button type="submit" class="btn btn-success">Tambah Puskesmas  <span class="glyphicon glyphicon-plus"></button></a>
              
                           <br><br>
                  </div>
                </div>
                 <center><h1>Daftar Puskesmas Kota Batu</h1> </center> 
                        <?=$this->session->flashdata('editPuskesmas')?>
                         <?=$this->session->flashdata('hapusPuskesmas')?>
                         <?=$this->session->flashdata('tambahPuskesmas')?>
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                   <th>ID</th>
                    <th>Nama Puskesmas</th>
                    <th>Alamat Puskesmas</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Nonaktifkan</th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach ($object as $data){ ?>
               <tr>

                    <td><?php echo $data->idPuskesmas ?></td>
                    <td><?php echo $data->namaPuskes ?></td>
                    <td><?php echo $data->alamatPuskes ?></td>
                    <td><?php echo $data->status ?></td>
                <?php if ($data->status == 'AKTIF'){?>
                     <td>
                      <a href="javascript:void(0);" onclick="showmodal('<?php echo $data->idPuskesmas?>','<?php echo $data->namaPuskes?>','<?php echo $data->alamatPuskes ?>')" data-toggle="modal" data-target="#myModalEdit">
                         <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
                      </a>
                    </td>

                      <td>
                      <a href="<?php echo site_url()?>/Puskesmas/Delete/<?php echo $data->idPuskesmas ?>" onclick="return confirm('Apakah Anda yakin menonaktifkan Puskesmas secara permanen?');">
                      <button class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span></button>
                      </a>
                      <?php }else{?>
                      <td>
                    
                         <button class="btn btn-warning"><span class="glyphicon glyphicon-off"></span></button>
                    </td>

                      <td>
                    
                      <button class="btn btn-warning"><span class="glyphicon glyphicon-off"></span></button>
                      </td>
                      <?php }?>
           
                  
              </tr>
             <?php }?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
   
    <!--footer end-->
  </section>

  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalEdit" class="modal fade-in" >
        <div class="modal-dialog">
            <div class="modal-content" style="width: 800px; height:500px; margin-left: -100px;padding: 20px" >
                <div class="modal-header">
                    <h4 class="modal-title">Edit Puskesmas</h4>
                </div>
                <?php echo form_open_multipart('Puskesmas/update'); ?>
                <?php echo validation_errors(); ?>
                <br>
                 <div class="form-group">
                    <label for="">Id Puskesmas</label>
                    <input type="text" class="form-control" name="idPuskesmas" id="idPuskesmas" value="" readonly="">
                </div>
                <div class="form-group">
                    <label for="">Nama Puskesmas</label>
                    <input type="text" class="form-control" name="namaPuskes" id="namaPuskes" value="" >
                </div>
                <div class="form-group">
                    <label for="">Alamat Puskesmas</label>
                    <input type="text" class="form-control" name="alamatPuskes" id="alamatPuskes" value="" >
                </div>
                
                 
               <div align="right" style="margin-bottom: 20px; margin-right: 30px">
          <button class="btn-info" type="submit">Update</button>
            <a href=""><button class="btn-warning" data-dismiss="modal">Batal</button></a>
        </div>
    
        <?php echo form_close(); ?>
    </div>
            
            </div>

  

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






  <script type="text/javascript" language="javascript" src="<?php echo base_url()?>/assets/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/assets/lib/advanced-datatable/js/DT_bootstrap.js"></script>
   
 <script type="text/javascript">
    function showmodal(idPuskesmas,namaPuskes,alamatPuskes){
        document.getElementById('idPuskesmas').value = idPuskesmas;
        document.getElementById('namaPuskes').value = namaPuskes;
        document.getElementById('alamatPuskes').value = alamatPuskes;

    }
  </script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
    
  </script>
</body>
  

</html>

