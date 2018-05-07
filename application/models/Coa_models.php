<?php 

class Coa_models extends CI_Model{

	function __construct(){

		parent::__construct();
	}

	function getAllDataCoa()
	{
		$this->db->select("*");
		$this->db->from("tb_coa");

		return $this->db->get();

	}

	function getCoa($id){

	}

	function addCoa($data,$table){

		$this->db->insert('tb_coa',$data);

	}

	function updateCoa($id){

	}

	function deleteCoa($no_coa){
		
		$this->db->where('no_coa',$no_coa);
		$this->db->delete('tb_coa');
	}

}




