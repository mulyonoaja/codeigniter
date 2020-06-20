<?php 
class Mcustomer extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('customers');
	}
	

}

 ?>