<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_divisi extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_divisi')->result();
	}

	function tambah()
	{
		$nama_divisi 		= $this->input->post('nama_divisi');
		$ket_divisi 		= $this->input->post('ket_divisi');
		

				$data = array(
					'nama_data_divisi'		=> $nama_divisi,
					'ket_data_divisi'		=> $ket_divisi,
				);
				$this->db->insert('data_divisi', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_data_divisi',$idnya);
    	return $this->db->get('data_divisi')->row_array();
	}



	function edit()
	{
		$id 					= $this->input->post('id');
		$nama_data_divisi 		= $this->input->post('nama_data_divisi');
		$ket_data_divisi 		= $this->input->post('ket_data_divisi');


				$data = array(
					'nama_data_divisi'		=> $nama_data_divisi,
					'ket_data_divisi'		=> $ket_data_divisi,
				);
				$this->db->where('id_data_divisi',$id)->update('data_divisi', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_data_divisi', $id)->delete('data_divisi');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}