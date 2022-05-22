<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan_umkops extends CI_Model {

	function tampil()
	{
		return $this->db->get('laporan_umkops')->result();
	}

	function piljobno()
	{
		return $this->db->get('jobmasuk')->result();
	}


	function piljobnod()
	{
		return $this->db->get('jobmasuk_d')->result();
	}

	function tambah()
	{
		$nopc_umkops			= $this->input->post('nopc_umkops');
		$tgl_mintaumkops		= $this->input->post('tgl_mintaumkops');
		$nama_umkops			= $this->input->post('nama_umkops');
		$deskripsi_umkops		= $this->input->post('deskripsi_umkops');
		$jobno_umkops			= $this->input->post('jobno_umkops');
		$estjob_umkops			= $this->input->post('estjob_umkops');
		$nominal_umkops			= $this->input->post('nominal_umkops');
		$namarek_umkops			= $this->input->post('namarek_umkops');
		$bankrek_umkops			= $this->input->post('bankrek_umkops');
		$norek_umkops			= $this->input->post('norek_umkops');
		$tgl_lunas_umkops		= $this->input->post('tgl_lunas_umkops');
		$nopc_lunas_umkops		= $this->input->post('nopc_lunas_umkops');
		

		

				$data = array(
					'nopc_umkops'				=> $nopc_umkops,
					'tgl_mintaumkops'			=> $tgl_mintaumkops,
					'nama_umkops'				=> $nama_umkops,
					'deskripsi_umkops'			=> $deskripsi_umkops,
					'jobno_umkops'				=> $jobno_umkops,
					'estjob_umkops'				=> $estjob_umkops,
					'nominal_umkops'			=> $nominal_umkops,
					'namarek_umkops'			=> $namarek_umkops,
					'bankrek_umkops'			=> $bankrek_umkops,
					'norek_umkops'				=> $norek_umkops,
					'tgl_lunas_umkops'			=> $tgl_lunas_umkops,
					'nopc_lunas_umkops'			=> $nopc_lunas_umkops,
							
					
				);
				$this->db->insert('laporan_umkops', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_laporan_umkops',$idnya);
    	return $this->db->get('laporan_umkops')->row_array();

	}



	function edit()
	{
		$id 					= $this->input->post('id');
		$nopc_umkops			= $this->input->post('nopc_umkops');
		$tgl_mintaumkops		= $this->input->post('tgl_mintaumkops');
		$nama_umkops			= $this->input->post('nama_umkops');
		$deskripsi_umkops		= $this->input->post('deskripsi_umkops');
		$jobno_umkops			= $this->input->post('jobno_umkops');
		$estjob_umkops			= $this->input->post('estjob_umkops');
		$nominal_umkops			= $this->input->post('nominal_umkops');
		$namarek_umkops			= $this->input->post('namarek_umkops');
		$bankrek_umkops			= $this->input->post('bankrek_umkops');
		$norek_umkops			= $this->input->post('norek_umkops');
		$tgl_lunas_umkops		= $this->input->post('tgl_lunas_umkops');
		$nopc_lunas_umkops		= $this->input->post('nopc_lunas_umkops');



				$data = array(
					'nopc_umkops'				=> $nopc_umkops,
					'tgl_mintaumkops'			=> $tgl_mintaumkops,
					'nama_umkops'				=> $nama_umkops,
					'deskripsi_umkops'			=> $deskripsi_umkops,
					'jobno_umkops'				=> $jobno_umkops,
					'estjob_umkops'				=> $estjob_umkops,
					'nominal_umkops'			=> $nominal_umkops,
					'namarek_umkops'			=> $namarek_umkops,
					'bankrek_umkops'			=> $bankrek_umkops,
					'norek_umkops'				=> $norek_umkops,
					'tgl_lunas_umkops'			=> $tgl_lunas_umkops,
					'nopc_lunas_umkops'			=> $nopc_lunas_umkops,
							


				);
				$this->db->where('id_laporan_umkops',$id)->update('laporan_umkops', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_laporan_umkops', $id)->delete('laporan_umkops');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}