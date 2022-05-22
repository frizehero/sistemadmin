<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jobmasuk extends CI_Model {

	function tampil()
	{
		return $this->db->get('jobmasuk')->result();
	}

	function tambah()
	{
		$jobno			= $this->input->post('jobno');
		$jobkode		= $this->input->post('jobkode');
		$vessel_bg		= $this->input->post('vessel_bg');
		$shipper   		= $this->input->post('shipper');
		$pt   			= $this->input->post('pt');
		$eta			= $this->input->post('eta');
		$lokasi			= $this->input->post('lokasi');
		$tujuan			= $this->input->post('tujuan');
		$initial		= $this->input->post('initial');
		$final			= $this->input->post('final');
		$quantity		= $this->input->post('quantity');
		$statusjob		= $this->input->post('statusjob');
		

				$data = array(
					'jobno'			=> $jobno,
					'jobkode'		=> $jobkode,
					'vessel_bg'		=> $vessel_bg,
					'shipper'		=> $shipper,
					'pt'			=> $pt,
					'eta'			=> $eta,
					'lokasi'		=> $lokasi,
					'tujuan'		=> $tujuan,
					'initial'		=> $initial,
					'final'			=> $final,
					'quantity'		=> $quantity,
					'statusjob'		=> $statusjob,
					
				);
				$this->db->insert('jobmasuk', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_jobmasuk',$idnya);
    	return $this->db->get('jobmasuk')->row_array();
	}



	function edit()
	{
		$id 					= $this->input->post('id');
		$jobno					= $this->input->post('jobno');
		$jobkode				= $this->input->post('jobkode');
		$vessel_bg				= $this->input->post('vessel_bg');
		$shipper				= $this->input->post('shipper');
		$pt						= $this->input->post('pt');
		$eta					= $this->input->post('eta');
		$lokasi					= $this->input->post('lokasi');
		$tujuan					= $this->input->post('tujuan');
		$initial				= $this->input->post('initial');
		$final					= $this->input->post('final');
		$quantity				= $this->input->post('quantity');
		$statusjob				= $this->input->post('statusjob');



				$data = array(
					'jobno'				=> $jobno,
					'jobkode'			=> $jobkode,
					'vessel_bg'			=> $vessel_bg,
					'shipper'			=> $shipper,
					'pt'				=> $pt,
					'eta'				=> $eta,
					'lokasi'			=> $lokasi,
					'tujuan'			=> $tujuan,
					'initial'			=> $initial,
					'final'				=> $final,
					'quantity'			=> $quantity,
					'statusjob'			=> $statusjob,
				);
				$this->db->where('id_jobmasuk',$id)->update('jobmasuk', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_jobmasuk', $id)->delete('jobmasuk');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}