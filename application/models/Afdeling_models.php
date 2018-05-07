<?php 

class Afdeling_models extends CI_Model{

	function getAllData()
	{
		$query = $this->db->select('tb_afdeling.*, tb_unit.nama_unit, tb_unit.lokasi')
                      ->from('tb_afdeling')
                      ->join('tb_unit', 'tb_unit.id_unit = tb_afdeling.id_unit', 'left')
                      ->get()
                      ->result();
		return $query;

	}

	function get_id($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		return $this->db->get('tb_afdeling')->row();

	}

	function get_unit(){

		$data = $this->db->select('*')->from('tb_unit')->get();
		return $data->result();
	}

	function insert($data)
	{
		$this->db->insert('tb_afdeling', $data);
		return $this->db->insert_id();
	}
}
?>