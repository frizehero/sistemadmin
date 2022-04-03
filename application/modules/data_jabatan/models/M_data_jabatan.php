<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_jabatan extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_jabatan')->result();
	}

	function tambah()
	{
		$nama_jabatan 		= $this->input->post('nama_jabatan');
		$ket_jabatan 		= $this->input->post('ket_jabatan');
		
				$data = array(
					'nama_jabatan'		=> $nama_jabatan,
					'ket_jabatan'		=> $ket_jabatan,
									);
				$this->db->insert('data_jabatan', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_data_jabatan',$idnya);
    	return $this->db->get('data_jabatan')->row_array();
	}



	function edit()
	{
		$id 		= $this->input->post('id');
		$kode 		= $this->input->post('kode');
		$nama 		= $this->input->post('nama');

				$data = array(
					'kode_room'		=> $kode,
					'nama_room'		=> $nama,
				);
				$this->db->where('id_data_jabatan',$id)->update('data_jabatan', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_data_jabatan', $id)->delete('data_jabatan');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}