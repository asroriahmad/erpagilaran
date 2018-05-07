<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_afdeling extends CI_Controller {

	function __construct(){

		parent::__construct();		
		$this->load->model('Afdeling_models');
		$this->load->helper('url');
	}

	function index()
	{
		
		$data = array(
      	'afdeling' => $this->Afdeling_models->getAllData(),
		);

		$this->load->view('Setup_afdeling/view-setup', $data);
	}

	function add(){

		$data = array(
      	'afdeling' => $this->Afdeling_models->get_unit(),
		);

		$this->load->view('Setup_afdeling/input-setup', $data);
	}


	function insert()
	{
		$data = array(
      		'id_afdeling' => $this->input->post('id_afdeling'),
      		'nama_afdeling' => $this->input->post('nama_afdeling'),
      		'luas' => $this->input->post('luas'),
      		'id_unit' => $this->input->post('id_unit'),
			
		);

		$this->Afdeling_models->insert($data);
		redirect('Setup_afdeling');	
	}


}
?>