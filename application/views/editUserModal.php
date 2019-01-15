<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit User</h4>
                        <div class="ml-auto text-right">
                            <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <a href="" data-toggle="modal" data-target="#myModal">
            <button type="button" class="btn btn-success" style="margin-bottom: 20px" >Tambah</button></a>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                 
                <div class="row el-element-overlay">
                <?php foreach ($user as $key) {?>
                <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <!-- <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/upload/<?php echo $key->foto?>" alt="user" style="min-height: 200px" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url()?>assets/upload/<?php echo $key->foto?>" ><i class="mdi mdi-magnify-plus"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo site_url()?>/TabelFilm/deleteFilm/<?php echo $key->noFilm;?>" onclick="return confirm('Are you sure to delete this data permanently?');"><i class="mdi mdi-delete"></i></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <div class="el-card-content">
                                    <h4 class="m-b-0"><?php echo $key-> ?></h4> <p class="text-muted">
                                    <a href="javascript:void(0);" onclick="showmodal('<?php echo $key->noFilm ?>','<?php echo $key->judulFilm ?>','<?php echo $key->deskripsiFilm ?>','<?php echo $key->pemain ?>','<?php echo $key->sutradara ?>','<?php echo $key->produser?>','<?php echo $key->releaseDate ?>','<?php echo $key->durasi ?>','<?php echo $key->genre?>')" data-toggle="modal" data-target="#myModalEdit"><button class="btn btn-outline-primary">Update</button></a></p>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php }?>


                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>



    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                </div>
     <?php echo form_open_multipart('TabelFilm/createFilm'); ?>
    <div class="modal-body">
        <div class="form-group">
                    <label for="">Judul Film</label>
                    <input type="text" class="form-control" name="judulFilm" value="" placeholder="judulFilm" >
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea class="form-control" name="deskripsiFilm" value="" placeholder="deskripsiFilm"> </textarea>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto" value="" placeholder="upload foto" >
                </div>
                <div class="form-group">
                    <label for="">Pemain</label>
                                    
                                        <input type="text" class="form-control" name="pemain" placeholder="pemain">
                                    
                                </div>
                                                <div class="form-group">
                                    <label for="">Produser</label>
                    <input type="text" class="form-control" name="produser" value="" placeholder="produser" >
                </div>
                                <div class="form-group">
                                    <label for="">Sutradara</label>
                                    
                                        <input type="text" class="form-control" name="sutradara" placeholder="sutradara">
                                    
                                </div>
                                <div class="form-group">
                    <label for="">Genre Film</label>
                    <input type="text" class="form-control" name="genre" value="" placeholder="genre film" >
                </div>
                <div class="form-group">
                    <label for="">Durasi</label>
                    <input type="text" class="form-control" name="durasi" value="" placeholder="durasi" >
                </div>
                <div class="form-group">
                    <label for="">Release Date</label>
                    <input type="date" class="form-control" name="releaseDate" value="" >
                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
                <?php echo form_close(); ?>
    </div>
    </div>
    </div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalEdit" class="modal fade-in" >
        <div class="modal-dialog">
            <div class="modal-content" style="width: 800px; margin-left: -100px;padding: 20px" >
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                </div>
      <?php echo form_open_multipart('TabelFilm/updateFilm'); ?>
                <?php echo validation_errors(); ?>
                 <input type="text" class="form-control" name="idFilm" id="idFilm" value="" hidden="">
                <div class="form-group">
                    <label for="">Judul Film</label>
                    <input type="text" class="form-control" name="judulFilm" id="judul" value="" >
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Film</label>
                    <textarea cols="30" rows="6" id="deskripsi" class="form-control" name="deskripsiFilm" value=""></textarea>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="hidden" id="foto" class="form-control" name="foto_old" value="" placeholder="upload foto" >
                    <input type="file" class="form-control" name="foto" value="" placeholder="upload foto" >
                </div>
                <div class="form-group">
                    <label for="">Pemain Film</label>
                    <input type="text" id="pemain2" class="form-control" name="pemain" value="" >
                </div>
                <div class="form-group">
                    <label for="">Produser</label>
                    <input type="text" id="produser" class="form-control" name="produser" value="" placeholder="produser" >
                </div>
                 <div class="form-group">
                    <label for="">Sutradara Film</label>
                    <input type="text" id="sutradara" class="form-control" name="sutradara" value="">
                </div>
                <div class="form-group">
                    <label for="">Genre Film</label>
                    <input type="text" id="genre" class="form-control" name="genre" value="" placeholder="genre film" >
                </div>
                <div class="form-group">
                    <label for="">Durasi</label>
                    <input type="text" id="durasi" class="form-control" name="durasi" value="" placeholder="durasi" >
                </div>
                 <div class="form-group">
                    <label for="">Release Date</label>
                    <input type="date" id="release" class="form-control" name="releaseDate" value="" placeholder="release Date" >
                </div>
               <div align="right" style="margin-bottom: 20px; margin-right: 30px">
          <button class="btn-info" type="submit">Update</button>
            <a href=""><button class="btn-warning" data-dismiss="modal">Batal</button></a>
        </div>
    
        <?php echo form_close(); ?>
    </div>
            
            </div>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
     <script src="<?php echo base_url()?>/assets/admin/libs/jquery/dist/jquery.min.js"></script>

     <script type="text/javascript">
    function showmodal(id,judul,deskripsi,pemain,sutradara,produser,date,durasi,genre){
        document.getElementById('idFilm').value = id;
        document.getElementById('judul').value = judul;
        document.getElementById('deskripsi').value = deskripsi;
        document.getElementById('pemain2').value = pemain;
        document.getElementById('sutradara').value = sutradara;
        document.getElementById('produser').value = produser;
        document.getElementById('release').value = date;
        document.getElementById('durasi').value = durasi;
        document.getElementById('genre').value = genre;
    }
</script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>/assets/admin/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()?>/assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>/assets/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>/assets/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>/assets/admin/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="<?php echo base_url()?>/assets/admin/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/magnific-popup/meg.init.js"></script>
</body>

</html>