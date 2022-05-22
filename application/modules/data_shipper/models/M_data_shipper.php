<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_shipper extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_shipper')->result();
	}

	function tambah()
	{
		$nama_shipper 				= $this->input->post('nama_shipper');
		$ket_shipper 				= $this->input->post('ket_shipper');

				$data = array(
					'nama_shipper'				=> $nama_shipper,
					'ket_shipper'				=> $ket_shipper,
				);
				$this->db->insert('data_shipper', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_shipper',$idnya);
    	return $this->db->get('data_shipper')->row_array();
	}


	function edit()
	{
		$id 		= $this->input->post('id');
		$nama_shipper 				= $this->input->post('nama_shipper');
		$ket_shipper				= $this->input->post('ket_shipper');
		
		
				$data = array(
				'nama_shipper'				=> $nama_shipper,	
				'ket_shipper'				=> $ket_shipper,


				);
				$this->db->where('id_shipper',$id)->update('data_shipper', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_shipper', $id)->delete('data_shipper');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}