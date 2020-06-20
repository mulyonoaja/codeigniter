<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index () {
		$this->load->model('m_mhs');
		$dat['siswa']=$this->m_mhs->get_data();

		$this->load->view('v_mhs', $dat);
}

}
 ?>
