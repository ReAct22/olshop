<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		
	}
	
	public function index(){
		$data = array(
			'title' => 'Dashboard',
			'total_barang' => $this->m_admin->total_barang(),
			'total_kategori' => $this->m_admin->total_kategori(),
			'isi'	=> 'v_admin',
	
		);
		$this->load->view('layout/v_wrap_backend', $data, FALSE);
		
	}
}
