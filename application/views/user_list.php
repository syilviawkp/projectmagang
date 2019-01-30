
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
              <h4 class="mb"><i class="fa fa-angle-right"></i> User</h4>

                <div class="form-group">
                <div class="col-sm-12" align="right">
           
                <a href="<?php echo site_url()?>/login/tambahUser"><button type="submit" class="btn btn-success">Tambah User  <span class="glyphicon glyphicon-plus"></button></a>
                <!-- <button id="btn-edit" class="btn btn-success" ><<?php ?>/login/create">Tambah user</button></a> -->
                           <br><br>
                  </div>
                </div>
                 <center><h1>Kelola User</h1> </center> 
                        <?=$this->session->flashdata('editUser')?>
                         <?=$this->session->flashdata('hapusUser')?>
                         <?=$this->session->flashdata('tambahUser')?>
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                   <th>ID user</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama Lengkap</th>
                    <th>Nomer HP</th>
                    <th>Jabatan</th>
                    <th>Kode Puskesmas</th>
                    <th>Level user</th>
                    <th>edit</th>
                    <th>delete</th>
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

                       
                         <td>
                         <a href="javascript:void(0);" onclick="showmodal('<?php echo $key->idUser ?>','<?php echo $key->username ?>','<?php echo $key->password ?>','<?php echo $key->nama ?>','<?php echo $key->noHp ?>','<?php echo $key->jabatan?>','<?php echo $key->idPuskesmas ?>','<?php echo $key->level ?>')" data-toggle="modal" data-target="#myModalEdit">
                         <button class="btn btn-primary" title="edit data user">
                         <span class="glyphicon glyphicon-pencil"></span>
                         </button>
                         </a>
                         </td>
                         
                         <td>


                        <a href="<?php echo site_url()?>/Login/Delete/<?php echo $key->idUser ?>" onclick="return confirm('Are you sure to delete this data permanently?');"><p data-placement="top" title="Delete"><button class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete" title="hapus user"><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
                        </tr>




                  <?php } ?> 
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
            <div class="modal-content" style="width: 800px; height:800px; margin-left: -100px;padding: 20px" >
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                </div>
                <?php echo form_open_multipart('Login/update'); ?>
                   
                <br>
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
                     <select class="form-control" name="jabatan" id="jabatan">
                  <!-- <option value="">Pilih jabatan</option> -->
                  <option value="Staff" >Staff Dinkes </option>
                  <option value="Kepala puskesmas"  >Kepala Puskesmas</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Puskesmas</label>
                     <select class="form-control" name="idPuskesmas" id="idPuskesmas">             
                     <option value="0">Pilih puskesmas:</option>
                     <?php foreach ($puskesmas_object as $key){ ?> 
                      <option value="<?php echo $key->idPuskesmas?>" ><?php echo $key->namaPuskes?></option>
                    <?php }?>
            
                  </select>
                </div>
               
                <div class="form-group">
                    <label for="">Level</label>
                     <select class="form-control" name="level" id="level">
             
                  <option value="User">User</option>
                  <option value="Admin">Admin</option>
                  </select>
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
    function showmodal(idUser,username,password,nama,noHp,jabatan,idPuskesmas,level){
      $("#idPuskesmas").children().removeAttr("selected");
        document.getElementById('idUser').value = idUser;
        document.getElementById('username').value = username;
        document.getElementById('password').value = password;
        document.getElementById('nama').value = nama;
        document.getElementById('noHp').value = noHp;
      
       if(level=="Admin"){
           $("#level").html('<option value="Admin" selected="">Admin</option>');
        }else if(level=="User"){
           $("#level").html('<option value="User" selected="">User</option>');
        }

        if(jabatan=="Staff"){
           $("#jabatan").html(' <option value="Staff" selected="">Staff Dinkes </option><option value="Kepala puskesmas"  >Kepala Puskesmas</option>');
        }else if(jabatan=="Kepala puskesmas"){
           $("#jabatan").html(' <option value="Staff" >Staff Dinkes </option><option value="Kepala puskesmas" selected="" >Kepala Puskesmas</option>');
        }

    
             $('#idPuskesmas').find('option[value="'+idPuskesmas+'"]').attr("selected","selected");
        
       
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
  <script type="text/javascript">

    $("#jabatan").change(function () {
        var val = $(this).val(); //get the value
        $("#idPuskesmas").attr('disabled',false);
        if (val == "Kepala puskesmas") { //if Hercules append only necessary options
            $("#idPuskesmas").html('<?php foreach ($puskesmas_object as $key){ ?> <option value="<?php echo $key->idPuskesmas?>" ><?php echo $key->namaPuskes?></option><?php }?>');
                        $("#level").html('<option value="User">User</option>');
        } else{
          $("#level").html('<option value="Admin">Admin</option>');
           $("#idPuskesmas").html("<option value=''></option>");

        }
});

  </script>

</body>
  

</html>

