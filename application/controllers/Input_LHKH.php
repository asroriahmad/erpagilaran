<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_LHKH extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'er pailaran | system for monitoring estate'
		);

		$this->load->view('lhkh/view-lhkh',$data);
	}

	function add()
	{
		$this->load->view('lhkh/Input-LHKH');
	}
}
