	<?php 

class Mahasiswa extends CI_Controller{

	public function index()
	{
		$data['siswa'] = $this->m_mahasiswa->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_mahasiswa', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$nama	    = $this->input->post('nama');
		$nim	    = $this->input->post('nim');
		$tgl_lahir	= $this->input->post('tgl_lahir');
		$jurusan	= $this->input->post('jurusan');
		$foto 		= $_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './asset/foto';
			$config['allowed_types'] 	='jpg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{
				$foto=$this->upload->data('file_name');
			}

		}

		$dat = array(
			'nama'      => $nama,
			'nim'       => $nim,
			'tgl_lahir' => $tgl_lahir,
			'jurusan'   => $jurusan,
			'foto'      => $foto

		);
		$this->m_mahasiswa->input_data($dat,'tb_mahasiswa');
		redirect('mahasiswa/index');
	}
	public function hapus($id)
	{
		$where =array ('id' => $id);
		$this->m_mahasiswa->hapus_data($where, 'tb_mahasiswa');
		redirect ('mahasiswa/index');
	}
	public function edit($id){
		$where =array('id' =>$id);
		$data['mahasiswa']=$this->m_mahasiswa->edit_data($where,'tb_mahasiswa')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');

	}
	public function detail($id)
	{
		$where =array('id' =>$id);
		$data['siswa']=$this->m_mahasiswa->tampil_detail($where,'tb_mahasiswa')->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
	}
	public function update()
	{
		$id =$this->input->post('id');
		$nama =$this->input->post('nama');
		$nim =$this->input->post('nim');
		$tgl_lahir =$this->input->post('tgl_lahir');
		$jurusan =$this->input->post('jurusan');

		$data =array(
			'nama' 		=> $nama,
			'nim' 		=> $nim,
			'tgl_lahir' => $tgl_lahir,
			'jurusan' 	=> $jurusan
		);

		$where =array(
			'id' => $id
		);
		$this->m_mahasiswa->update_data($where, $data,'tb_mahasiswa');
		redirect('mahasiswa/index');
	}
	
}

 ?>