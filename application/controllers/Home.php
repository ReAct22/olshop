<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index(){
		$data = array(
			'title' => 'Home',
			'isi'	=> 'v_home',
	
		);
		$this->load->view('layout/v_wrap_frontend', $data, FALSE);
		
	}
}
