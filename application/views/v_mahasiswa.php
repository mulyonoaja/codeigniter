<div class="content-wrapper">
	<section class="content">
           <!-- small box -->
            <div>
              <div>
                <h3>Data Mahasiswa</h3>
              </div>
              <div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Mahasiswa</button>
              </div>
              <div>
                <table class="table">
                <tr>
                  <th>NO</th>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Tanggal Lahir</th>
                  <th>Jurusan</th>
                  <th colspan="3">Aksi</th>
                </tr>
                <?php 
                
                $no=1;
                foreach ($siswa as $mhs): ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $mhs->nama; ?></td>
                  <td><?php echo $mhs->nim; ?></td>
                  <td><?php echo $mhs->tgl_lahir; ?></td>
                  <td><?php echo $mhs->jurusan; ?></td>
                  <td>
                     <?php echo anchor('mahasiswa/detail/'.$mhs->id, '<div class="btn btn-succes btn-sm"><i class="fas fa-search-plus"></i></div>') ?>
                    
                  </td>
                  <td onclick="javascript : return confirm ('Anda yakin hapus?')">  
                    <?php echo anchor('mahasiswa/hapus/'.$mhs->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                  </td>
                  <td>
                    <?php echo anchor('mahasiswa/edit/'.$mhs->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                  </td>
                </tr>
                <?php  endforeach; ?>
                </table>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
    </section>  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('http://localhost/codeigniter/index.php/mahasiswa/tambah_aksi'); ?> 
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="text" name="tgl_lahir" class="form-control">
          </div>
          <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control">
          </div>
          <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" name="foto" class="form-control">
          </div>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">RESET</button>
        <button type="Submit" class="btn btn-primary">SAVE</button>
        <?php echo form_close(); ?>
      </div>
      </div>
  </div>
</div>      
</div>