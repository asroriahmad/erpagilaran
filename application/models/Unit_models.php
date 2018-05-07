<?php 

class Unit_models extends CI_Model{

	function getAllData()
	{
		$this->db->select("*");
		$this->db->from("tb_unit");
		return $this->db->get();

	}

	function get_id($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		return $this->db->get('tb_unit')->row();

	}

	function get_unit(){

		$data = $this->db->select('*')->from('tb_unit')->get();
		return $data->result();
	}

	function insert($data)
	{
		$this->db->insert('tb_unit', $data);
		return $this->db->insert_id();
	}

}




