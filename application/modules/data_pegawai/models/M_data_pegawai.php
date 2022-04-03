<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_pegawai extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_pegawai')->result();
	}

	function tambah()
	{
		$nama_pegawai 		= $this->input->post('nama_pegawai');
		$ket_pegawai 		= $this->input->post('ket_pegawai');
		$nik_pegawai 		= $this->input->post('nik_pegawai');
		$telepon_pegawai 	= $this->input->post('telepon_pegawai');
		$rumah_pegawai 		= $this->input->post('rumah_pegawai');
		$email_pegawai 		= $this->input->post('email_pegawai');


				$data = array(
					'nama_pegawai'		=> $nama_pegawai,
					'ket_pegawai'		=> $ket_pegawai,
					'nik_pegawai'		=> $nik_pegawai,
					'telepon_pegawai'	=> $telepon_pegawai,
					'rumah_pegawai'		=> $rumah_pegawai,
					'email_pegawai'		=> $email_pegawai,

				);
				$this->db->insert('data_pegawai', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_data_pegawai',$idnya);
    	return $this->db->get('data_pegawai')->row_array();
	}



	function edit()
	{
		$id 				= $this->input->post('id');
		$nama_pegawai 		= $this->input->post('nama_pegawai');
		$ket_pegawai 		= $this->input->post('ket_pegawai');
		$nik_pegawai 		= $this->input->post('nik_pegawai');
		$telepon_pegawai 	= $this->input->post('telepon_pegawai');
		$rumah_pegawai 		= $this->input->post('rumah_pegawai');
		$email_pegawai 		= $this->input->post('email_pegawai');

				$data = array(
					'nama_pegawai'		=> $nama_pegawai,
					'ket_pegawai'		=> $ket_pegawai,
					'nik_pegawai'		=> $nik_pegawai,
					'telepon_pegawai'	=> $telepon_pegawai,
					'rumah_pegawai'		=> $rumah_pegawai,
					'email_pegawai'		=> $email_pegawai,
				);
				$this->db->where('id_data_pegawai',$id)->update('data_pegawai', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_data_pegawai', $id)->delete('data_pegawai');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}