<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_vendor extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_vendor')->result();
	}

	function tambah()
	{
		$jenis_vendor 				= $this->input->post('jenis_vendor');
		$nama_usaha_vendor 			= $this->input->post('nama_usaha_vendor');
		$nama_rekening_vendor 		= $this->input->post('nama_rekening_vendor');
		$bank_vendor 				= $this->input->post('bank_vendor');
		$norek_vendor 				= $this->input->post('norek_vendor');
		

				$data = array(
					'jenis_vendor'				=> $jenis_vendor,
					'nama_usaha_vendor'			=> $nama_usaha_vendor,
					'nama_rekening_vendor'		=> $nama_rekening_vendor,
					'bank_vendor'				=> $bank_vendor,
					'norek_vendor'				=> $norek_vendor,
				);
				$this->db->insert('data_vendor', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_data_vendor',$idnya);
    	return $this->db->get('data_vendor')->row_array();
	}



	function edit()
	{
		$id 		= $this->input->post('id');
		$jenis_vendor 				= $this->input->post('jenis_vendor');
		$nama_usaha_vendor 			= $this->input->post('nama_usaha_vendor');
		$nama_rekening_vendor 		= $this->input->post('nama_rekening_vendor');
		$bank_vendor 				= $this->input->post('bank_vendor');
		$norek_vendor 				= $this->input->post('norek_vendor');
		
				$data = array(
				'jenis_vendor'				=> $jenis_vendor,	
				'nama_usaha_vendor'			=> $nama_usaha_vendor,
				'nama_rekening_vendor'		=> $nama_rekening_vendor,
				'bank_vendor'				=> $bank_vendor,
				'norek_vendor'				=> $norek_vendor,	


				);
				$this->db->where('id_data_vendor',$id)->update('data_vendor', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_data_vendor', $id)->delete('data_vendor');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}