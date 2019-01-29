<!DOCTYPE html>
<html>
<head>
	<title>Laporan Bulanan</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
		margin: 5px;
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
    h2 {
      margin-top: 30px;
    }
	</style>
</head>

<body>


<p style="text-align: center"><h2><center>Laporan Bulanan Puskesmas Bulan <?php echo $bulan ?> Tahun <?php echo $tahun?> </center></h2></p>

<br>
<h2><center>Laporan PSDK</center></h2>
<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            
                <tr>
                    <th></th>
                   <?php foreach ($puskesmasYankes as $key) {?>
                   <th><?php echo $key->namaPuskes?></th>
                   <?php } ?>
                    <th>TEPAT WAKTU</th>
                    <th>SUSULAN</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($kategoriYankes as $key){?>
              <tr>
                  <td colspan="6"><?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporanYankes as $data) {
                if($key->namaKategori==$data->namaKategori){?>
              <tr>
                <td><?php echo $data->namaField?></td>

                <?php foreach ($puskesmasYankes as $row) { 
                      $puskes = $row->namaPuskes;
                     if($data->$puskes =="SUDAH"){
                  ?>
                    <td><center>V</center><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } } ?>

              <td><?php echo $data->terima;?></td>
              <td><?php echo $data->susulan;?></td>
              </tr>
              <?php }}} ?>



            </tbody>

           
        </table> 
<br>
<br>
<br>
<br>
<br>

<h2><center>Laporan P2P</center></h2>

<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            
                <tr>
                    <th></th>
                   <?php foreach ($puskesmasP2pl as $key) {?>
                   <th><?php echo $key->namaPuskes?></th>
                   <?php } ?>
                    <th>TEPAT WAKTU</th>
                    <th>SUSULAN</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($kategoriP2pl as $key){?>
              <tr>
                  <td colspan="6"><?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporanP2pl as $data) {
                if($key->namaKategori==$data->namaKategori){?>
              <tr>
                <td><?php echo $data->namaField?></td>

                <?php foreach ($puskesmasP2pl as $row) { 
                      $puskes = $row->namaPuskes;
                     if($data->$puskes =="SUDAH"){
                  ?>
                    <td><center>V</center><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } } ?>

              <td><?php echo $data->terima;?></td>
              <td><?php echo $data->susulan;?></td>
              </tr>
              <?php }}} ?>



            </tbody>

           
        </table> 
<br>

<h2><center>Laporan Kesmas</center></h2>
<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            
                <tr>
                    <th></th>
                   <?php foreach ($puskesmasKesga as $key) {?>
                   <th><?php echo $key->namaPuskes?></th>
                   <?php } ?>
                    <th>TEPAT WAKTU</th>
                    <th>SUSULAN</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($kategoriKesga as $key){?>
              <tr>
                  <td colspan="6"><?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporanKesga as $data) {
                if($key->namaKategori==$data->namaKategori){?>
              <tr>
                <td><?php echo $data->namaField?></td>

                <?php foreach ($puskesmasKesga as $row) { 
                      $puskes = $row->namaPuskes;
                     if($data->$puskes =="SUDAH"){
                  ?>
                    <td><center>V</center><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
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