<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_kegiatan extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'er pailaran | system for monitoring estate'
		);

		$this->load->view('setup_kegiatan/view-setup',$data);
	}
}
