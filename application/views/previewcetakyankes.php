<!DOCTYPE html>
<html>
<head>
  <title>Daftar Laporan</title>
  <style>
    table{
      border-collapse: collapse;

      width: 70%;
      margin: 0 auto;
    }
    table th{
      border:2px solid #000;
      background-color:#00CCFF;
      padding: 3px;
      font-weight: bold;
      text-align: center;
    }
    table td{
      border: 2px solid #000;
      padding: 3px;
      vertical-align: top;
    }
    .foto3 {
      width: 250px;
      height: 250px;
    }
  </style>
  <link href="<?php echo base_url()?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="row">
  <div class="col-md-1">
</div>
   <div class="col-md-2">
    <br>
    <a href="<?php echo site_url('LaporanYankes');?>"><button type="submit" style = "width: 150px" class="btn btn-outline-success"><span class="glyphicon glyphicon-arrow-left"></span>Back</button></a>
  </div>

<div class="col-md-7"><h1>
    <p style="text-align: center">Laporan PSDK Bulan <?php echo $bulan ?> Tahun <?php echo $tahun?> </h1></p> 
</div>

<div class="col-md-2"><br>
  <?php echo form_open('cetaklaporan/cetakPdfYankes')?>
    <input type="text" name="bulan" value="<?php echo $bulan?>" hidden="">
    <input type="text" name="tahun" value="<?php echo $tahun?>" hidden="">
    <button type="submit" class="btn btn-outline-success" style="width: 150px"><span class="glyphicon glyphicon-print"></span>Cetak PDF</button>
  <?php echo form_close();?>
</div>
</div>

<br><br>

<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            
                <tr>
                    <th></th>
                   <?php foreach ($puskesmas as $key) {?>
                   <th><?php echo $key->namaPuskes?></th>
                   <?php } ?>
                    <th>TEPAT WAKTU</th>
                    <th>SUSULAN</th>
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

                <?php foreach ($puskesmas as $row) { 
                      $puskes = $row->namaPuskes;
                     if($data->$puskes =="SUDAH"){
                  ?>
                    <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } } ?>

              <td><?php echo $data->terima;?></td>
              <td><?php echo $data->susulan;?></td>
              </tr>
              <?php }}} ?>



            </tbody>

           
        </table> 

</body>
</html>

