<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_pegawai extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_pegawai')->result();
	}

	function tambah()
	{
		$nik_pegawai 		= $this->input->post('nik_pegawai');
		$nama_pegawai 		= $this->input->post('nama_pegawai');
		$ket_pegawai 		= $this->input->post('ket_pegawai'); //JABATAN PEGAWAI
		$telepon_pegawai 	= $this->input->post('telepon_pegawai');
		$email_pegawai 		= $this->input->post('email_pegawai');
		$bank_pegawai 		= $this->input->post('bank_pegawai');
		$norek_pegawai 		= $this->input->post('norek_pegawai');
		$cabangbank_pegawai = $this->input->post('cabangbank_pegawai');
		$ttd_pegawai 		= $this->input->post('ttd_pegawai');


				$data = array(
					'nik_pegawai'		=> $nik_pegawai,
					'nama_pegawai'		=> $nama_pegawai,
					'ket_pegawai'		=> $ket_pegawai,
					'telepon_pegawai'	=> $telepon_pegawai,
					'email_pegawai'		=> $email_pegawai,
					'bank_pegawai'		=> $bank_pegawai,
					'norek_pegawai'		=> $norek_pegawai,
					'cabangbank_pegawai'=> $cabangbank_pegawai,
					'ttd_pegawai'		=> $ttd_pegawai,
					

				);
				$this->db->insert('data_pegawai', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}


function tambah_subbank()
	{
		
		$nama_list_bank 	= $this->input->post('nama_list_bank');
		$norek_pegawai 		= $this->input->post('norek_pegawai');
		$cabangbank_pegawai = $this->input->post('cabangbank_pegawai');
		$id 				= $this->input->post('id');
	
				$data = array(

					'id_list_data_bank'		=> $id,
					'nama_list_bank'		=> $nama_list_bank,
					'norek_list_bank'		=> $norek_list_bank,
					'cabang_list_bank'		=> $cabang_list_bank,	


				);
				$this->db->insert('list_data_bank', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}



	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_data_pegawai',$idnya);
    	return $this->db->get('data_pegawai')->row_array();
	}

function tampilist($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_data_pegawai',$idnya);
    	return $this->db->get('list_data_bank')->result();
	}


	function edit()
	{
		$id 				= $this->input->post('id');
		$nik_pegawai 		= $this->input->post('nik_pegawai');
		$nama_pegawai 		= $this->input->post('nama_pegawai');
		$ket_pegawai 		= $this->input->post('ket_pegawai');
		$telepon_pegawai 	= $this->input->post('telepon_pegawai');
		$email_pegawai 		= $this->input->post('email_pegawai');
		$bank_pegawai 		= $this->input->post('bank_pegawai');
		$norek_pegawai 		= $this->input->post('norek_pegawai');
		$cabangbank_pegawai = $this->input->post('cabangbank_pegawai');
		$ttd_pegawai 		= $this->input->post('ttd_pegawai');

				$data = array(
					'nik_pegawai'		=> $nik_pegawai,
					'nama_pegawai'		=> $nama_pegawai,
					'ket_pegawai'		=> $ket_pegawai,
					'telepon_pegawai'	=> $telepon_pegawai,
					'email_pegawai'		=> $email_pegawai,
					'bank_pegawai'		=> $bank_pegawai,
					'norek_pegawai'		=> $norek_pegawai,
					'cabangbank_pegawai'=> $cabangbank_pegawai,
					'ttd_pegawai'		=> $ttd_pegawai,
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