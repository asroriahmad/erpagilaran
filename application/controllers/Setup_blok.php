<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_blok extends CI_Controller {

	function __construct(){

		parent::__construct();		
		$this->load->model('blok_models', 'blok');
		$this->load->helper('url');
	}

	function index()
	{
		
		$data = array(
      	'blok' => $this->blok->getAllData(),
		);

		$this->load->view('setup_blok/view-setup', $data);
	}

	function add(){

		$data = array(
      	'unit' => $this->blok->get_unit(),
		);

		$this->load->view('setup_blok/input-setup', $data);
	}


	function insert()
	{
		$data = array(
      		'id_blok'        => $this->input->post('id_blok'),
			'nama_blok'      => $this->input->post('nama_blok'),
			'id_unit'        => $this->input->post('id_unit'),
			'luas'           => $this->input->post('luas'),
			'tahun_pangkas'  => $this->input->post('tahun_pangkas'),
			'tahun_tanam'    => $this->input->post('tahun_tanam'),
			'populasi_blok'  => $this->input->post('populasi_blok'),
			'populasi_hektar'=> $this->input->post('populasi_hektar'),
			'protas_hektar'  => $this->input->post('protas_hektar'),
			'klone'          => $this->input->post('klone'),
			'kemiringan'     => $this->input->post('kemiringan'),
			'tinggi'         => $this->input->post('kemiringan'),
			'jenis_tanah'    => $this->input->post('jenis_tanah'),
			'opt'            => $this->input->post('opt'),
			'teknis_petik'   => $this->input->post('teknis_petik'),
			'gilir_petik'    => $this->input->post('gilir_petik'),
		);

		$this->blok->insert($data);
		redirect('setup_blok');	
	}


}
?>