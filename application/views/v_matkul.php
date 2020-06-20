<!DOCTYPE html>
<html>
<head>
	<title>Daftar Matakuliah</title>
</head>
<body>

	<table border="1px solid">
		
		<tr>
			<th>NAMA MATAKULIAH</th>
			<th>BOBOT SKS</th>
		</tr>
		<?php foreach ($matakuliah as $kul): ?>

		<tr>
			<td><?php echo $kul['matkul']; ?></td>
			<td><?php echo $kul['sks']; ?></td>
		</tr>


	<?php  endforeach; ?>

	</table>

</body>
</html>