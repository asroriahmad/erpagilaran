<?php 

class Produksi_basah_models extends CI_Model{

	function getAllData()
	{
		$query = $this->db->select('tb_produksi_harian.*, tb_afdeling.nama_afdeling, tb_afdeling.luas')
                      ->from('tb_produksi_harian')
                      ->join('tb_afdeling', 'tb_afdeling.id_afdeling = tb_produksi_harian.id_afdeling', 'left')
                      ->get()
                      ->result();
		return $query;

		// $this->db->select("*");
		// $this->db->from("tb_produksi_harian");
		// return $this->db->get();

	}

	// function data($number,$offset){
	// 	return $query = $this->db->get('tb_produksi_harian',$number,$offset)->result();		
	// }

	// function pagination_basah(){
	// 	return $this->db->get('tb_produksi_harian')->num_rows();
	// }

	function pagination_basah($limit, $start){
        $query = $this->db->get('tb_produksi_harian', $limit, $start)->result();
        return $query;
    }

    
	function get_id($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		return $this->db->get('tb_produksi_harian')->row();

	}

	function get_jenis_produksi(){

		$data = $this->db->select('*')->from('tb_afdeling')->get();
		return $data->result();
	}

	function insert($data)
	{
		$this->db->insert('tb_produksi_harian', $data);
		return $this->db->insert_id();
	}


	function total_produksi(){

		$this->db->select('SUM(hasil) as total');
		$this->db->from('tb_produksi_harian');
		return $this->db->get()->row()->total;

	}

	function total_produksi_afdeling(){
		
		// $query = $this->db->select('id_afdeling,tanggal, SUM(hasil) as total')->from('tb_produksi_harian')->group_by('tanggal')->where('id_afdeling',4)->get()->result();
		$query = $this->db->select('id_afdeling, SUM(hasil) total')->from('tb_produksi_harian')->group_by('tanggal')->get()->result();
		
		return $query;


	}

	}
?>

