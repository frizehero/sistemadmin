<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan_vesselc extends CI_Model {

	function tampil()
	{
		return $this->db->get('laporan_vesselc')->result();
	}

	function tambah()
	{
		$lotv_C02 					= $this->input->post('lotv_C02');
		$bargesv_C02 				= $this->input->post('bargesv_C02');
		$tugboatv_C02 				= $this->input->post('tugboatv_C02');
		$fromv_C02			 		= $this->input->post('tov_C02');
		$tov_C02 					= $this->input->post('fromv_C02');
		$quantityv_C02 				= $this->input->post('quantityv_C02');
		$jettyv_C02 				= $this->input->post('jettyv_C02');
		$remarkv_C02 				= $this->input->post('remarkv_C02');
		$surveyorv_C02 				= $this->input->post('surveyorv_C02');
		$samplerv_C02 				= $this->input->post('samplerv_C02');
		$notesv_C02 				= $this->input->post('notesv_C02');
		

				$data = array(
					'lotv_C02'					=> $lotv_C02,
					'bargesv_C02'				=> $bargesv_C02,
					'tugboatv_C02'				=> $tugboatv_C02,
					'tov_C02'					=> $tov_C02,
					'fromv_C02'					=> $fromv_C02,
					'quantityv_C02'				=> $quantityv_C02,
					'jettyv_C02'				=> $jettyv_C02,
					'remarkv_C02'				=> $remarkv_C02,
					'surveyorv_C02'				=> $surveyorv_C02,
					'samplerv_C02'				=> $samplerv_C02,
					'notesv_C02'				=> $notesv_C02,



				);
				$this->db->insert('laporan_vesselc', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_lapvessel_C02',$idnya);
    	return $this->db->get('laporan_vesselc')->row_array();
	}



	function edit()
	{
		$id 						= $this->input->post('id');
		$lotv_C02 					= $this->input->post('lotv_C02');
		$bargesv_C02 				= $this->input->post('bargesv_C02');
		$tugboatv_C02 				= $this->input->post('tugboatv_C02');
		$fromv_C02			 		= $this->input->post('tov_C02');
		$tov_C02 					= $this->input->post('fromv_C02');
		$quantityv_C02 				= $this->input->post('quantityv_C02');
		$jettyv_C02 				= $this->input->post('jettyv_C02');
		$remarkv_C02 				= $this->input->post('remarkv_C02');
		$surveyorv_C02 				= $this->input->post('surveyorv_C02');
		$samplerv_C02 				= $this->input->post('samplerv_C02');
		$notesv_C02 				= $this->input->post('notesv_C02');
		
		
				$data = array(
					'lotv_C02'					=> $lotv_C02,
					'bargesv_C02'				=> $bargesv_C02,
					'tugboatv_C02'				=> $tugboatv_C02,
					'tov_C02'					=> $tov_C02,
					'fromv_C02'					=> $fromv_C02,
					'quantityv_C02'				=> $quantityv_C02,
					'jettyv_C02'				=> $jettyv_C02,
					'remarkv_C02'				=> $remarkv_C02,
					'surveyorv_C02'				=> $surveyorv_C02,
					'samplerv_C02'				=> $samplerv_C02,
					'notesv_C02'				=> $notesv_C02,

				);
				$this->db->where('id_lapvessel_C02',$id)->update('laporan_vesselc', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_lapvessel_C02', $id)->delete('laporan_vesselc');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}