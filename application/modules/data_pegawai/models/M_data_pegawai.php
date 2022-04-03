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
		

				$data = array(
					'nama_pegawai'		=> $nama_pegawai,
					'ket_pegawai'		=> $ket_pegawai,
					
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
		$id 		= $this->input->post('id');
		$kode 		= $this->input->post('kode');
		$nama 		= $this->input->post('nama');

				$data = array(
					'kode_room'		=> $kode,
					'nama_room'		=> $nama,
					'pj_room'		=> $pj,
					'ket_room'		=> $keterangan,
				);
				$this->db->where('id_inv_room',$id)->update('inventory_room', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_inv_room', $id)->delete('inventory_room');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}