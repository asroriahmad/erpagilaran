<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_komoditi extends CI_Controller {

	function __construct(){

		parent::__construct();		
		$this->load->model('Komoditi_models');
		$this->load->helper('url');
	}

	function index()
	{
		
		$data['komoditi'] = $this->Komoditi_models->getAllData()->result();

		$this->load->view('setup_komoditi/view-setup', $data);
	}

	function add(){

		$this->load->view('setup_komoditi/input-setup');
	}


	function insert()
	{
		$data = array(
      		'id_komoditi' => $this->input->post('id_komoditi'),
      		'nama_komoditi' => $this->input->post('nama_komoditi'),
      		'deskripsi' => $this->input->post('deskripsi'),
			
		);

		$this->Komoditi_models->insert($data);
		redirect('setup_komoditi');	
	}


}
?>