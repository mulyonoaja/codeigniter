<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	public function index () {
		$this->load->model('m_matkul');
		$data['matakuliah']=$this->m_matkul->get_data();

		$this->load->view('v_matkul', $data);
}

}
 ?>
