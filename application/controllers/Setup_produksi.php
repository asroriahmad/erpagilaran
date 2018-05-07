<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_produksi extends CI_Controller {

	function __construct(){

		parent::__construct();		
		$this->load->model('Produksi_models');
		$this->load->helper('url');
	}

	function index()
	{
		
		$data['jenis_produksi'] = $this->Produksi_models->getAllData()->result();
		$this->load->view('setup_produksi/view-setup', $data);
	}

	function add(){

		$this->load->view('setup_produksi/input-setup');
	}


	function insert()
	{
		$data = array(

      		'id_jenis_produksi' => $this->input->post('id_jenis_produksi'),
      		'nama_produksi' => $this->input->post('nama_produksi'),
      		'deskripsi' => $this->input->post('deskripsi'),
		);

		$this->Produksi_models->insert($data);
		redirect('setup_produksi');	
	}
}
