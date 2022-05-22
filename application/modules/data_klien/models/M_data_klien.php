<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_klien extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_klien')->result();
	}

	function tambah()
	{
		$nama_klien					= $this->input->post('nama_klien');
		$ket_klien 					= $this->input->post('ket_klien');
		
		

				$data = array(
					'nama_klien'				=> $nama_klien,
					'ket_klien'					=> $ket_klien,
				);
				$this->db->insert('data_klien', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_klien',$idnya);
    	return $this->db->get('data_klien')->row_array();
	}



	function edit()
	{
		$id 						= $this->input->post('id');
		$nama_klien 				= $this->input->post('nama_klien');
		$ket_klien 					= $this->input->post('ket_klien');
		
				$data = array(
				'nama_klien'				=> $nama_klien,	
				'ket_klien'					=> $ket_klien,

				);
				$this->db->where('id_klien',$id)->update('data_klien', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_klien', $id)->delete('data_klien');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}