<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$_SESSION['login'] = null;
		
		$data = array(
			'page' => 'home',
			'link' => 'home'
		);

		$this->load->view('template/wrapper', $data);
	}
}
