<?php 


class Setup_coa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Coa_models');
		$this->load->helper('url');

	}

	function index(){
		// $data = array(
		// 	'title' => 'er pailaran | system for monitoring estate'
		// );

		$data['coa'] = $this->Coa_models->getAllDataCoa()->result();
		$this->load->view('setup_coa/view-setup', $data);
	}

	function addview(){

		$this->load->view('setup_coa/input-setup');
	}

	function addcoa(){
		$no_coa = $this->input->post('no_coa');
		$deskripsi = $this->input->post('deskripsi');
		$saldo_debit = $this->input->post('saldo_debit');
		$saldo_kredit = $this->input->post('saldo_kredit');
		$group_by = $this->input->post('group_by');

		$data = array(
			'no_coa' => $no_coa,
			'deskripsi' => $deskripsi,
			'saldo_debit' => $saldo_debit,
			'saldo_kredit' => $saldo_kredit,
			'group_by' => $group_by,
			);
		$this->Coa_models->addCoa($data,'coa');
		redirect('Setup_coa');
	}

	function updateview(){

		$this->load->view('setup_coa/edit-setup');
		
	}

	function updatecoadb(){

		$no_coa = $this->input->post('no_coa');
		$deskripsi = $this->input->post('deskripsi');
		$saldo_debit = $this->input->post('saldo_debit');
		$saldo_kredit = $this->input->post('saldo_kredit');
		$group_by = $this->input->post('group_by');

		$data = array(
			'no_coa' => $no_coa,
			'deskripsi' => $deskripsi,
			'saldo_debit' => $saldo_debit,
			'saldo_kredit' => $saldo_kredit,
			'group_by' => $group_by,
			);
		$this->Coa_models->updateCoa($data,'coa');
		redirect('Setup_coa');

	}

	function delete(){
		$no_coa = $this->uri->segment(3);
	    $this->Coa_models->deleteCoa($no_coa);
	    redirect('Setup_coa');
	}

}

