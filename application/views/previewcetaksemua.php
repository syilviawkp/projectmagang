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
</head>

<body>


<h1>
<p style="text-align: center">Laporan Bulanan Puskesmas Bulan <?php echo $bulan ?> Tahun <?php echo $tahun?> </h1></p>
<br>
<h2><center>Laporan PSDK</center></h2>
<table>
	<tr>
		<th>Nama Laporan</th>
		<th>Batu</th>
    <th>Beji</th>
    <th>Bumiaji</th>
		<th>Junrejo</th>
		<th>Sisir</th>
		<th>Sudah Masuk</th>
		<th>Susulan</th>
	</tr>
	<?php foreach($kategoriYankes as $key){?>
              <tr>
  
                  <td colspan="8">
                    <?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporanYankes as $data) {
                if($key->namaKategori==$data->namaKategori){?>
              <tr>
                <td><?php echo $data->namaField?></td>
                <?php if($data->Batu == "SUDAH") {?>

                <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Beji == "SUDAH") {?>
                <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Bumiaji == "SUDAH") {?>
                <td><input type="checkbox" name="feeling" value="good" checked="" disabled  readonly=""></td>
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
              <td><?php echo $data->terima; ?></td>
              <td><?php echo $data->susulan; ?></td>
            
              </tr>
              <?php }}} ?>
</table>
<br>
<br>
<br>
<br>
<br>

<h2><center>Laporan P2P</center></h2>

<table>
  <tr>
    <th>Nama Laporan</th>
    <th>Batu</th>
    <th>Beji</th>
    <th>Bumiaji</th>
    <th>Junrejo</th>
    <th>Sisir</th>
    <th>Sudah Masuk</th>
    <th>Susulan</th>
  </tr>
  <?php foreach($kategoriP2pl as $key){?>
              <tr>
  
                  <td colspan="8">
                    <?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporanP2pl as $data) {
                if($key->namaKategori==$data->namaKategori){?>
              <tr>
                <td><?php echo $data->namaField?></td>
                <?php if($data->Batu == "SUDAH") {?>

                <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Beji == "SUDAH") {?>
                <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Bumiaji == "SUDAH") {?>
                <td><input type="checkbox" name="feeling" value="good" checked="" disabled  readonly=""></td>
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
              <td><?php echo $data->terima; ?></td>
              <td><?php echo $data->susulan; ?></td>
            
              </tr>
              <?php }}} ?>
</table>
<br>

<h2><center>Laporan Kesmas</center></h2>
<table>
  <tr>
    <th>Nama Laporan</th>
    <th>Batu</th>
    <th>Beji</th>
    <th>Bumiaji</th>
    <th>Junrejo</th>
    <th>Sisir</th>
    <th>Sudah Masuk</th>
    <th>Susulan</th>
  </tr>
  <?php foreach($kategoriKesga as $key){?>
              <tr>
  
                  <td colspan="8">
                    <?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporanKesga as $data) {
                if($key->namaKategori==$data->namaKategori){?>
              <tr>
                <td><?php echo $data->namaField?></td>
                <?php if($data->Batu == "SUDAH") {?>

                <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Beji == "SUDAH") {?>
                <td><input type="checkbox" name="feeling" value="good" checked="" disabled readonly=""></td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Bumiaji == "SUDAH") {?>
                <td><input type="checkbox" name="feeling" value="good" checked="" disabled  readonly=""></td>
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
              <td><?php echo $data->terima; ?></td>
              <td><?php echo $data->susulan; ?></td>
            
              </tr>
              <?php }}} ?>
</table>
<p style="text-align: center">
<?php echo form_open('cetaklaporan/cetakPdfSemua')?>
<input type="text" name="bulan" value="<?php echo $bulan?>" hidden="">
<input type="text" name="tahun" value="<?php echo $tahun?>" hidden="">
  <center><button type="submit" class="btn btn-outline-success"><span class="glyphicon glyphicon-print"></span>Cetak PDF</button></center>
  <?php echo form_close();?>
</body>
</html>

