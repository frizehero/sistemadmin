<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan_bgd extends CI_Model {

	function tampil()
	{
		return $this->db->get('laporan_bgd')->result();
	}

	function tampil_jobnod($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('bgd_jobno',$idnya);
    	return $this->db->get('laporan_bgd')->result();
	}

	function tambahbg()
	{
		$nama_bg 	= $this->input->post('nama_bg');
	

				$data = array(
					'nama_bg'				=> $nama_bg,
					
				);
				$this->db->insert('data_bg', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tambahtb()
	{
		$nama_tb 				= $this->input->post('nama_tb');
	

				$data = array(
					'nama_tb'				=> $nama_tb,
					
				);
				$this->db->insert('data_bg', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}


	function pilbg()
	{
		return $this->db->get('data_bg')->result();
	}

	function piltb()
	{
		return $this->db->get('data_tb')->result();
	}

	function tambah()
	{
		$bgd_jobno					= $this->input->post('bgd_jobno');
		$lot_bgd					= $this->input->post('lot_bgd');
		$barges_D02					= $this->input->post('barges_D02');
		$tugboat_D02				= $this->input->post('tugboat_D02');
		$from_D02 					= $this->input->post('from_D02');
		$to_D02 					= $this->input->post('to_D02');
		$quantity_D02 				= $this->input->post('quantity_D02');
		$jetty_D02 					= $this->input->post('jetty_D02');
		$remark_D02 				= $this->input->post('remark_D02');
		$surveyor_D02 				= $this->input->post('surveyor_D02');
		$sampler_D02 				= $this->input->post('sampler_D02');
		$notes_D02 					= $this->input->post('notes_D02');
				

				$data = array(
					'bgd_jobno'					=> $bgd_jobno,
					'lot_bgd'					=> $lot_bgd,
					'barges_D02'				=> $barges_D02,
					'tugboat_D02'				=> $tugboat_D02,
					'from_D02'					=> $from_D02,
					'to_D02'					=> $to_D02,
					'quantity_D02'				=> $quantity_D02,
					'jetty_D02'					=> $jetty_D02,
					'remark_D02'				=> $remark_D02,
					'surveyor_D02'				=> $surveyor_D02,
					'sampler_D02'				=> $sampler_D02,
					'notes_D02'					=> $notes_D02,

				);
				$this->db->insert('laporan_bgd', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_lap_D02',$idnya);
    	return $this->db->get('laporan_bgd')->row_array();
	}



	function edit()
	{
		$id 						= $this->input->post('id');
		$lot_bgd					= $this->input->post('lot_bgd');
		$barges_D02					= $this->input->post('barges_D02');
		$tugboat_D02				= $this->input->post('tugboat_D02');
		$from_D02 					= $this->input->post('from_D02');
		$to_D02 					= $this->input->post('to_D02');
		$quantity_D02 				= $this->input->post('quantity_D02');
		$jetty_D02 					= $this->input->post('jetty_D02');
		$remark_D02 				= $this->input->post('remark_D02');
		$surveyor_D02 				= $this->input->post('surveyor_D02');
		$sampler_D02 				= $this->input->post('sampler_D02');
		$notes_D02 					= $this->input->post('notes_D02');
		
				$data = array(
					'lot_bgd'					=> $lot_bgd,
					'barges_D02'				=> $barges_D02,
					'tugboat_D02'				=> $tugboat_D02,
					'from_D02'					=> $from_D02,
					'to_D02'					=> $to_D02,
					'quantity_D02'				=> $quantity_D02,
					'jetty_D02'					=> $jetty_D02,
					'remark_D02'				=> $remark_D02,
					'surveyor_D02'				=> $surveyor_D02,
					'sampler_D02'				=> $sampler_D02,
					'notes_D02'					=> $notes_D02,


				);
				$this->db->where('id_lap_D02',$id)->update('laporan_bgd', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_lap_D02', $id)->delete('laporan_bgd');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}