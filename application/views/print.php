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
			border:1px solid #000;
			padding: 3px;
			font-weight: bold;
			text-align: center;
		}
		table td{
			border: 1px solid #000;
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
<p style="text-align: center">Tabel blablabla</p>
<table>
	<tr>
		<th>Nama Field</th>
		<th>Nama Kategori</th>
		<th>Batu</th>
		<th>Junrejo</th>
		<th>Beji</th>
		<th>Sisir</th>
		<th>Bumiaji</th>
		<th>Terima</th>
		<th>Susulan</th>
	</tr>
	<?php $id=0; foreach ($detailLaporan as $key) {
	$id++;
	?>
		<tr>
			<td><?php echo $key->namaField?></td>
			<td><?php echo $key->namaKategori?></td>
			<td><?php echo $key->Batu?></td>
			<td><?php echo $key->Junrejo?></td>
			<td><?php echo $key->Beji?></td>
			<td><?php echo $key->Sisir?></td>
			<td><?php echo $key->Bumiaji?></td>
		</tr>
	<?php }?>
</table>
</body>
</html>