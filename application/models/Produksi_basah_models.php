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

	// function total_produksi_afdeling(){
	// 	$query = $this->db->select('*', COUNT('id_afdeling'))->group_by('id_afdeling')->from('tb_produksi_harian')->get()->result();
	// 	return $query;

	// }

	function total_produksi_afdeling(){

		$query = $this->db->select('id_afdeling, COUNT(id_afdeling), DATE_FORMAT("%Y-%m")')->from('tb_produksi_harian')->group_by(array('id_afdeling', 'DATE_FORMAT(tanggal,"%y-%m")'))->get()->result();
		return $query;



	
	}


	}
?>


<!-- $data = array();
  $options = array('idblog' => $idblog);
  $Q = $this->db->get_where('tb_blogs',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
  $Q->free_result();
  return $data; -->