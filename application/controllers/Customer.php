<?php 

class Customer extends CI_Controller{

	public function index()
	{
		$data['xxx'] = $this->mcustomer->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('vcustomer', $data);
		$this->load->view('templates/footer');
	}
	
}

 ?>