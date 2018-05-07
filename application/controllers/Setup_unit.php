<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_unit extends CI_Controller {

	function __construct(){

		parent::__construct();		
		$this->load->model('Unit_models');
		$this->load->helper('url');
	}

	function index()
	{
		
		$data['unit'] = $this->Unit_models->getAllData()->result();
		$this->load->view('setup_unit/view-setup', $data);
	}

	function add(){

		$this->load->view('setup_unit/input-setup');
	}


	function insert()
	{
		$data = array(

      		'id_unit' => $this->input->post('id_unit'),
      		'nama_unit' => $this->input->post('nama_unit'),
      		'lokasi' => $this->input->post('lokasi'),
		);

		$this->Unit_models->insert($data);
		redirect('setup_unit');	
	}
}
