<div class="content-wrapper">
	<section class="content">
     <!-- small box -->
        <div>
            <div>
              <h3>Detail Data Mahasiswa</h3>
            </div>   
              
            <div>
              <table class="table">
                <?php 
                foreach ($siswa as $mhs): ?>
                 <tr>   
                   <td>NIM</td>  <td><?php echo $mhs->nim; ?></td>
                 </tr>
                <tr>
                  <td>Nama Mahasiswa</td> <td><?php echo $mhs->nama; ?></td>
                </tr>
                <tr>   
                  <td>Tanggal Lahir</td>  <td><?php echo $mhs->tgl_lahir; ?></td>
               </tr>
               <tr>   
               <td>Jurusan</td>    <td><?php echo $mhs->jurusan; ?></td>
               </tr>
                <?php  endforeach; ?>
                </table>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
  </section>  
</div>      