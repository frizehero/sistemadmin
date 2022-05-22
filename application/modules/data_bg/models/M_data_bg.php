<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_bg extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_bg')->result();
	}

	function tambah()
	{
		$nama_bg 				= $this->input->post('nama_bg');
		$ket_bg 				= $this->input->post('ket_bg');
	

				$data = array(
					'nama_bg'				=> $nama_bg,
					'ket_bg'				=> $ket_bg,
					
				);
				$this->db->insert('data_bg', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_bg',$idnya);
    	return $this->db->get('data_bg')->row_array();
	}



	function edit()
	{
		$id 					= $this->input->post('id');
		$nama_bg 				= $this->input->post('nama_bg');
		$ket_bg 				= $this->input->post('ket_bg');
		
				$data = array(
				'nama_bg'				=> $nama_bg,	
				'ket_bg'				=> $ket_bg,
				


				);
				$this->db->where('id_bg',$id)->update('data_bg', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_bg', $id)->delete('data_bg');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}