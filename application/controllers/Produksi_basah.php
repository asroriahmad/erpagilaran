<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produksi_basah extends CI_Controller {

	function __construct(){

		parent::__construct();		
		$this->load->model('Produksi_basah_models', 'produksi_basah');
		$this->load->helper('url');
		$this->load->library('pagination');
	}

	function index()
	{
		

		$data = array(
      	'produksi_basah' => $this->produksi_basah->getAllData(),
      	'total_basah' => $this->produksi_basah->total_produksi(),
      	'total_produksi_afdeling' => $this->produksi_basah->total_produksi_afdeling(),
		);


		$this->load->view('Production/view-produksi-basah', $data);

		// print_r($data);
	}

	function add(){

		$data = array(
		'produksi_basah' => $this->produksi_basah->getAllData(),
      	'total_basah' => $this->produksi_basah->total_produksi(),
      	'total_produksi_afdeling' => $this->produksi_basah->total_produksi_afdeling(),
      	'afdeling' => $this->produksi_basah->get_jenis_produksi(),
		);

		// $data['afdeling'] = $this->produksi_basah->get_jenis_produksi()->result();
		$this->load->view('Production/input-produksi-basah',$data);
		// print_r($data);
	}


	function insert()
	{
		$data = array(
      		'id_produksi'        => $this->input->post('id_produksi'),
			'id_afdeling'      => $this->input->post('id_afdeling'),
			'tanggal'      => $this->input->post('tanggal'),
			'hasil'      => $this->input->post('hasil'),
			'kualitas'      => $this->input->post('kualitas'),
			'harga'      => $this->input->post('harga'),
			'deskripsi'      => $this->input->post('deskripsi'),
		);

		$this->produksi_basah->insert($data);
		redirect('produksi_basah/add');	
	}

	function total_produksi_basah(){

		$total_produksi_afdeling = array(

			'total_produksi_afdeling' => $this->produksi_basah->total_produksi_afdeling(),
		);

		echo "<pre>";
		print_r($total_produksi_afdeling);
		echo "</pre>";
	}

	function laporan_produksi_basah(){
		
		$data = array(
      	'produksi_basah' => $this->produksi_basah->getAllData(),
      	'total_basah' => $this->produksi_basah->total_produksi(),

		);

		// $data['produksi_basah'] = $this->Produksi_basah_models->getAllData()->result();

		$this->load->view('Laporan/laporan-produksi-basah', $data);

	}

}
?>

