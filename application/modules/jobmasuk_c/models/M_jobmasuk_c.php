<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jobmasuk_c extends CI_Model {

	function tampil()
	{
		return $this->db->get('jobmasuk_c')->result();
	}

	function tambah()
	{
		$jobno_C02		= $this->input->post('jobno_C02');
		$pt_C02			= $this->input->post('pt_C02');
		$vessel_bg_C02	= $this->input->post('vessel_bg_C02');
		$eta_C02		= $this->input->post('eta_C02');
		$lokasi_C02		= $this->input->post('lokasi_C02');
		$tujuan_C02		= $this->input->post('tujuan_C02');
		$statusjob_C02	= $this->input->post('statusjob_C02');
		

				$data = array(
					'jobno_C02'			=> $jobno_C02,
					'pt_C02'			=> $pt_C02,
					'vessel_bg_C02'		=> $vessel_bg_C02,
					'eta_C02'			=> $eta_C02,
					'lokasi_C02'		=> $lokasi_C02,
					'tujuan_C02'		=> $tujuan_C02,
					'statusjob_C02'		=> $statusjob_C02,
					
				);
				$this->db->insert('jobmasuk_c', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_jobmasuk_C02',$idnya);
    	return $this->db->get('jobmasuk_c')->row_array();
	}



	function edit()
	{
		$id 		= $this->input->post('id');
		$jobno_C02				= $this->input->post('jobno_C02');
		$pt_C02					= $this->input->post('pt_C02');
		$vessel_bg_C02			= $this->input->post('vessel_bg_C02');
		$eta_C02				= $this->input->post('eta_C02');
		$lokasi_C02				= $this->input->post('lokasi_C02');
		$tujuan_C02				= $this->input->post('tujuan_C02');
		$statusjob_C02			= $this->input->post('statusjob_C02');



				$data = array(
					'jobno_C02'			=> $jobno_C02,
					'pt_C02'			=> $pt_C02,
					'vessel_bg_C02'		=> $vessel_bg_C02,
					'eta_C02'			=> $eta_C02,
					'lokasi_C02'		=> $lokasi_C02,
					'tujuan_C02'		=> $tujuan_C02,
					'statusjob_C02'		=> $statusjob_C02,
				);
				$this->db->where('id_jobmasuk_C02',$id)->update('jobmasuk_c', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_jobmasuk_C02', $id)->delete('jobmasuk_c');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}