<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_uangmuka_ops extends CI_Model {

	function tampil()
	{
		return $this->db->get('uangmuka_ops')->result();
	}

	function piljobno()
	{
		return $this->db->get('jobmasuk')->result();
	}


	function piljobnod()
	{
		return $this->db->get('jobmasuk_d')->result();
	}

	function pilnik()
	{
		return $this->db->get('data_pegawai')->result();
	}


	function tambah()
	{
		$tanggal_uangmukaops	= $this->input->post('tanggal_uangmukaops');
		$nik_pegawai			= $this->input->post('nik_pegawai');
		$nama_pegawai			= $this->input->post('nama_pegawai');
		$jobno					= $this->input->post('jobno');
		$pt   					= $this->input->post('pt');
		$vessel_bg				= $this->input->post('vessel_bg');
		$job_pekerjaannya		= $this->input->post('job_pekerjaannya');
		$deskripsi_uangmukaops	= $this->input->post('deskripsi_uangmukaops');
		$nominal_uangmukaops	= $this->input->post('nominal_uangmukaops');
		$nik_pegawai			= $this->input->post('nik_pegawai');
		$nama_pegawai			= $this->input->post('nama_pegawai');
		$nama_list_bank			= $this->input->post('nama_list_bank');
		$norek_bank				= $this->input->post('norek_bank');
		$cabang_bank			= $this->input->post('cabang_bank');
		$ket_uangmukaops		= $this->input->post('ket_uangmukaops');
		

		

				$data = array(
					'tanggal_uangmukaops'			=> $tanggal_uangmukaops,
					'nik_pegawai'					=> $nik_pegawai,
					'nama_pegawai'					=> $nama_pegawai,
					'jobno'							=> $jobno,
					'pt'							=> $pt,
					'vessel_bg'						=> $vessel_bg,
					'job_pekerjaannya'				=> $job_pekerjaannya,
					'deskripsi_uangmukaops'			=> $deskripsi_uangmukaops,
					'nominal_uangmukaops'			=> $nominal_uangmukaops,
					'nama_pegawai'					=> $nama_pegawai,
					'nama_list_bank'				=> $nama_list_bank,
					'norek_bank'					=> $norek_bank,
					'cabang_bank'					=> $cabang_bank,
					'ket_uangmukaops'				=> $ket_uangmukaops,
							
					
				);
				$this->db->insert('uangmuka_ops', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_uangmukaops',$idnya);
    	return $this->db->get('uangmuka_ops')->row_array();
	}



	function edit()
	{
		$id 					= $this->input->post('id');
		$tanggal_uangmukaops	= $this->input->post('tanggal_uangmukaops');
		$nik_pegawai			= $this->input->post('nik_pegawai');
		$nama_pegawai			= $this->input->post('nama_pegawai');
		$jobno					= $this->input->post('jobno');
		$pt   					= $this->input->post('pt');
		$vessel_bg				= $this->input->post('vessel_bg');
		$job_pekerjaannya		= $this->input->post('job_pekerjaannya');
		$deskripsi_uangmukaops	= $this->input->post('deskripsi_uangmukaops');
		$nominal_uangmukaops	= $this->input->post('nominal_uangmukaops');
		$nama_pegawai			= $this->input->post('nama_pegawai');
		$nama_list_bank			= $this->input->post('nama_list_bank');
		$norek_bank				= $this->input->post('norek_bank');
		$cabang_bank			= $this->input->post('cabang_bank');
		$ket_uangmukaops		= $this->input->post('ket_uangmukaops');



				$data = array(
					'tanggal_uangmukaops'			=> $tanggal_uangmukaops,
					'nik_pegawai'					=> $nik_pegawai,
					'nama_pegawai'					=> $nama_pegawai,
					'jobno'							=> $jobno,
					'pt'							=> $pt,
					'vessel_bg'						=> $vessel_bg,
					'job_pekerjaannya'				=> $job_pekerjaannya,
					'deskripsi_uangmukaops'			=> $deskripsi_uangmukaops,
					'nominal_uangmukaops'			=> $nominal_uangmukaops,
					'nama_pegawai'					=> $nama_pegawai,
					'nama_list_bank'				=> $nama_list_bank,
					'norek_bank'					=> $norek_bank,
					'cabang_bank'					=> $cabang_bank,
					'ket_uangmukaops'				=> $ket_uangmukaops,
				);
				$this->db->where('id_uangmukaops',$id)->update('uangmuka_ops', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_uangmukaops', $id)->delete('uangmuka_ops');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}