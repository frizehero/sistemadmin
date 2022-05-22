<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_tb extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_tb')->result();
	}

	function tambah()
	{
		$nama_tb 					= $this->input->post('nama_tb');
		$ket_tb 					= $this->input->post('ket_tb');
		

				$data = array(
					'nama_tb'					=> $nama_tb,
					'ket_tb'					=> $ket_tb,
	
				);
				$this->db->insert('data_tb', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_tb',$idnya);
    	return $this->db->get('data_tb')->row_array();
	}



	function edit()
	{
		$id 						= $this->input->post('id');
		$nama_tb 					= $this->input->post('nama_tb');
		$ket_tb 					= $this->input->post('ket_tb');
		
		
				$data = array(
				'nama_tb'					=> $nama_tb,
				'ket_tb'					=> $ket_tb,


				);
				$this->db->where('id_tb',$id)->update('data_tb', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_tb', $id)->delete('data_tb');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}