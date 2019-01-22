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

<p style="text-align: center">Laporan blablabla</p>
<table>
	<tr>
		<th></th>
	   
		<th>Batu</th>
		<th>Junrejo</th>
		<th>Beji</th>
		<th>Sisir</th>
		<th>Bumiaji</th>
		<th>Terima</th>
		<th>Susulan</th>
	</tr>
	<?php foreach($kategori as $key){?>
              <tr>
                  <td colspan="6"><?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporan as $data) {
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
            
              </tr>
              <?php }}} ?>
</table>
<p style="text-align: center"><button type="submit" class="btn btn-outline-success"><span class="glyphicon glyphicon-print"><a href="<?php echo base_url()?>index.php/cetaklaporan/cetakpdf">Cetak PDF</a></p>
</body>
</html>

