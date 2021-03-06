<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jobmasuk_d extends CI_Model {

	function tampil()
	{
		return $this->db->get('jobmasuk_d')->result();
	}

	function pilpt()
	{
		return $this->db->get('data_klien')->result();
	}

	function pilshipper()
	{
		return $this->db->get('data_shipper')->result();
	}

	function pilvessel()
	{
		return $this->db->get('data_vessel')->result();
	}
	
	function tambah()
	{
		$jobno_D02		= $this->input->post('jobno_D02');
		$jobkode		= $this->input->post('jobkode');
		$shipper_D02	= $this->input->post('shipper_D02');
		$pt_D02			= $this->input->post('pt_D02');
		$vessel_bg_D02	= $this->input->post('vessel_bg_D02');
		$eta_D02		= $this->input->post('eta_D02');
		$lokasi_D02		= $this->input->post('lokasi_D02');
		$tujuan_D02		= $this->input->post('tujuan_D02');
		$initial_D02	= $this->input->post('initial_D02');
		$final_D02		= $this->input->post('final_D02');
		$quantity_D02	= $this->input->post('quantity_D02');
		$statusjob_D02	= $this->input->post('statusjob_D02');
		

				$data = array(
					'jobno_D02'			=> $jobno_D02,
					'jobkode'			=> $jobkode,
					'shipper_D02'		=> $shipper_D02,
					'pt_D02'			=> $pt_D02,
					'vessel_bg_D02'		=> $vessel_bg_D02,
					'eta_D02'			=> $eta_D02,
					'lokasi_D02'		=> $lokasi_D02,
					'tujuan_D02'		=> $tujuan_D02,
					'initial_D02'		=> $initial_D02,
					'final_D02'			=> $final_D02,
					'quantity_D02'		=> $quantity_D02,
					'statusjob_D02'		=> $statusjob_D02,
					
				);
				$this->db->insert('jobmasuk_d', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_jobmasuk_D02',$idnya);
    	return $this->db->get('jobmasuk_d')->row_array();
	}



	function edit()
	{
		$id 					= $this->input->post('id');
		$jobno_D02				= $this->input->post('jobno_D02');
		$jobkode				= $this->input->post('jobkode');
		$shipper_D02			= $this->input->post('shipper_D02');
		$pt_D02					= $this->input->post('pt_D02');
		$vessel_bg_D02			= $this->input->post('vessel_bg_D02');
		$eta_D02				= $this->input->post('eta_D02');
		$lokasi_D02				= $this->input->post('lokasi_D02');
		$tujuan_D02				= $this->input->post('tujuan_D02');
		$initial_D02			= $this->input->post('initial_D02');
		$final_D02				= $this->input->post('final_D02');
		$quantity_D02			= $this->input->post('quantity_D02');
		$statusjob_D02			= $this->input->post('statusjob_D02');



				$data = array(
					'jobno_D02'			=> $jobno_D02,
					'jobkode'			=> $jobkode,
					'shipper_D02'		=> $shipper_D02,
					'pt_D02'			=> $pt_D02,
					'vessel_bg_D02'		=> $vessel_bg_D02,
					'eta_D02'			=> $eta_D02,
					'lokasi_D02'		=> $lokasi_D02,
					'tujuan_D02'		=> $tujuan_D02,
					'initial_D02'		=> $initial_D02,
					'final_D02'			=> $final_D02,
					'quantity_D02'		=> $quantity_D02,
					'statusjob_D02'		=> $statusjob_D02,
				);
				$this->db->where('id_jobmasuk_D02',$id)->update('jobmasuk_d', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_jobmasuk_D02', $id)->delete('jobmasuk_d');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}