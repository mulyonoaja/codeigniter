<?php 

class M_matkul extends CI_Model {
	
	public function get_data()
	{
		return $this->db->get('tb_matkul')->result_array();

	}

}

 ?>