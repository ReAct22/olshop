<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('m_barang');
		$this->load->model('m_kategori');
		

	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Barang',
			'barang' => $this->m_barang->get_all_data(),
			'isi'	=> 'barang/v_barang',
	
		);
		$this->load->view('layout/v_wrap_backend', $data, FALSE);
	}

	// Add a new item
	public function add()
	{

		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', array('required' => '%s Harus Diisi!!'));
		$this->form_validation->set_rules('id_kategori','Kategori', 'required', array('required' => '%s Harus Diisi!!'));
		$this->form_validation->set_rules('harga', 'Harga', 'required', array('required' => '%s Harus Diisi!!'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array('required' => '%s Harus Diisi!!'));
		
		
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Add Barang',
					'kategori' => $this->m_kategori->get_all_data(),
					'error_upload' => $this->upload->display_errors(),
					'isi'	=> 'barang/v_add',
			
				);
				$this->load->view('layout/v_wrap_backend', $data, FALSE);
			}else{
				$upload_data = array('uploads' => $this->upload->data('file_name'));
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar/'.$upload_data['uploads']['file_name'];
				
			}
		}
		

		$data = array(
			'title' => 'Add Barang',
			'kategori' => $this->m_kategori->get_all_data(),
			'isi'	=> 'barang/v_add',
	
		);
		$this->load->view('layout/v_wrap_backend', $data, FALSE);
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Controllername.php */

