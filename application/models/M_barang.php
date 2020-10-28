<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_barang');
		$this->db->join('tbl_kategor', 'tbl_kategor.id_kategori = tbl_barang.id_kategori', 'left');
		
		$this->db->order_by('id_barang', 'desc');
		return $this->db->get()->result();
		
	}

	public function add($data){
		$this->db->insert('barang', $data);
		
	}

	public function edit($data)
	{
		$this->db->where('id_barang', $data['id_barang']);
		$this->db->update('barang', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_barang', $data['id_barang']);
		$this->db->delete('barang', $data);
	}
}
