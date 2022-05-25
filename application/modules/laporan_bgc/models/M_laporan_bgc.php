<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan_bgc extends CI_Model {

	function tampil()
	{
		return $this->db->get('laporan_bgc')->result();
	}

	function tambah()
	{
		$barges_C02					= $this->input->post('barges_C02');
		$tugboat_C02				= $this->input->post('tugboat_C02');
		$from_C02 					= $this->input->post('from_C02');
		$to_C02 					= $this->input->post('to_C02');
		$quantity_C02 				= $this->input->post('quantity_C02');
		$jetty_C02 					= $this->input->post('jetty_C02');
		$remark_C02 				= $this->input->post('remark_C02');
		$surveyor_C02 				= $this->input->post('surveyor_C02');
		$sampler_C02 				= $this->input->post('sampler_C02');
		$notes_C02 					= $this->input->post('notes_C02');
				

				$data = array(
					'barges_C02'				=> $barges_C02,
					'tugboat_C02'				=> $tugboat_C02,
					'from_C02'					=> $from_C02,
					'to_C02'					=> $to_C02,
					'quantity_C02'				=> $quantity_C02,
					'jetty_C02'					=> $jetty_C02,
					'remark_C02'				=> $remark_C02,
					'surveyor_C02'				=> $surveyor_C02,
					'sampler_C02'				=> $sampler_C02,
					'notes_C02'					=> $notes_C02,

				);
				$this->db->insert('laporan_bgc', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_lap_C02',$idnya);
    	return $this->db->get('laporan_bgc')->row_array();
	}



	function edit()
	{
		$id 						= $this->input->post('id');
		$barges_C02					= $this->input->post('barges_C02');
		$tugboat_C02				= $this->input->post('tugboat_C02');
		$from_C02 					= $this->input->post('from_C02');
		$to_C02 					= $this->input->post('to_C02');
		$quantity_C02 				= $this->input->post('quantity_C02');
		$jetty_C02 					= $this->input->post('jetty_C02');
		$remark_C02 				= $this->input->post('remark_C02');
		$surveyor_C02 				= $this->input->post('surveyor_C02');
		$sampler_C02 				= $this->input->post('sampler_C02');
		$notes_C02 					= $this->input->post('notes_C02');
		
				$data = array(
					'barges_C02'				=> $barges_C02,
					'tugboat_C02'				=> $tugboat_C02,
					'from_C02'					=> $from_C02,
					'to_C02'					=> $to_C02,
					'quantity_C02'				=> $quantity_C02,
					'jetty_C02'					=> $jetty_C02,
					'remark_C02'				=> $remark_C02,
					'surveyor_C02'				=> $surveyor_C02,
					'sampler_C02'				=> $sampler_C02,
					'notes_C02'					=> $notes_C02,


				);
				$this->db->where('id_lap_C02',$id)->update('laporan_bgc', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_lap_C02', $id)->delete('laporan_bgc');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}