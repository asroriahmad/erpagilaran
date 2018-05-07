<?php 

class Produksi_models extends CI_Model{

	function getAllData()
	{
		$this->db->select("*");
		$this->db->from("tb_jenis_produksi");
		return $this->db->get();

	}

	function get_id($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		return $this->db->get('tb_jenis_produksi')->row();

	}

	
	function insert($data)
	{
		$this->db->insert('tb_jenis_produksi', $data);
		return $this->db->insert_id();
	}

}




