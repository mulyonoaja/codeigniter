<div class="content-wrapper">
	<section class="content">
		<table class="table" >
			<div><h3><i class="fas fa-edit"></i>EDIT DATA MAHASISWA</h3></div>
	<?php foreach($mahasiswa as $mhs) : ?>
	<form method="post" action="<?php echo 'http://localhost/codeigniter/index.php/mahasiswa/update'; ?>">
		
		<div class="form-group">
			<label>Nama Mahasiswa</label>
			<input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
			<input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
		</div>
		<div class="form-group">
			<label>NIM</label>
			<input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="text" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir ?>">
		</div>	
		<div class="form-group">
			<label>Jurusan</label>
			<input type="text" name="jurusan" class="form-control" value="<?php echo $mhs->jurusan ?>">
		</div>
		<button type="reset" class="btn btn-danger btn-sm">Reset</button>
		<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Submit</button>
	
	</form>
<?php endforeach; ?>
</table>
</section>
</div>