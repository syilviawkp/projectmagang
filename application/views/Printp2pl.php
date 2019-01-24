<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
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


<p style="text-align: center"><h2><center>Laporan P2P Bulan <?php echo $bulan ?> Tahun <?php echo $tahun?> </center></h2></p>


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
	<?php foreach($kategori as $key){?>
              <tr>
                  <td colspan="8"><?php echo $key->namaKategori?></td>
              </tr>
              <?php foreach ($laporan as $data) {
                if($key->namaKategori==$data->namaKategori){?>
              <tr>
                <td><?php echo $data->namaField?></td>
                <?php if($data->Batu == "SUDAH") {?>

                <td align="center">V</td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Beji == "SUDAH") {?>
                <td align="center">V</td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Bumiaji == "SUDAH") {?>
                <td align="center">V</td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Junrejo == "SUDAH") {?>
                <td align="center">V</td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>

              <?php if($data->Sisir == "SUDAH") {?>
                <td align="center">V</td>
              <?php }else{?>
              <td style="background: yellow"></td>
              <?php } ?>
              <td><?php echo $data->terima; ?></td>
              <td><?php echo $data->susulan; ?></td>
            
              </tr>
              <?php }}} ?>
</table>


</body>
</html>