<?php 

class Komoditi_models extends CI_Model{

	function getAllData()
	{
		$this->db->select("*");
		$this->db->from("tb_komoditi");
		return $this->db->get();

	}

	function get_id($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		return $this->db->get('tb_komoditi')->row();

	}

	// function get_unit(){

	// 	$data = $this->db->select('*')->from('tb_unit')->get();
	// 	return $data->result();
	// }

	function insert($data)
	{
		$this->db->insert('tb_komoditi', $data);
		return $this->db->insert_id();
	}

}




