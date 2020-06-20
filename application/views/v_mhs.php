<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

	<table border="1px solid">
		
		<tr>
			<th>NAMA MAHASISWA</th>
			<th>NIM</th>
			<th>ALAMAT</th>
		</tr>
		<?php foreach ($siswa as $mhs): ?>

		<tr>
			<td><?php echo $mhs['nama']; ?></td>
			<td><?php echo $mhs['nim']; ?></td>
			<td><?php echo $mhs['alamat']; ?></td>
		</tr>


	<?php  endforeach; ?>

	</table>

</body>
</html>