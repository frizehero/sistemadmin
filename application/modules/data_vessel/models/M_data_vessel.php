<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_vessel extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_vessel')->result();
	}

	function tambah()
	{
		$nama_vessel 				= $this->input->post('nama_vessel');
		$ket_vessel					= $this->input->post('ket_vessel');
		
				$data = array(
					'nama_vessel'				=> $nama_vessel,
					'ket_vessel'				=> $ket_vessel,
				);
				$this->db->insert('data_vessel', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_vessel',$idnya);
    	return $this->db->get('data_vessel')->row_array();
	}



	function edit()
	{
		$id 						= $this->input->post('id');
		$nama_vessel				= $this->input->post('nama_vessel');
		$ket_vessel					= $this->input->post('ket_vessel');
		
				$data = array(
				'nama_vessel'				=> $nama_vessel,	
				'ket_vessel'				=> $ket_vessel,


				);
				$this->db->where('id_vessel',$id)->update('data_vessel', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_vessel', $id)->delete('data_vessel');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}