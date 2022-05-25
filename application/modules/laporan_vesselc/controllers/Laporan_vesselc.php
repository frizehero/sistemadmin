<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_vesselc extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_laporan_vesselc');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "laporan_vesselc",
			'namafileview' 	=> "V_laporan_vesselc",
			'tampil'		=> $this->M_laporan_vesselc->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "laporan_vesselc",
			'namafileview' 	=> "V_laporanvesselc_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "laporan_vesselc",
			'namafileview' 	=> "V_laporanvesselc_edit",
			'tampil'		=> $this->M_laporan_vesselc->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_laporan_vesselc->tambah();
		redirect('laporan_vesselc');
		
		//redirect('laporan_vesselc');
	}

	function edit()
	{
		$this->M_laporan_vesselc->edit();
		redirect('laporan_vesselc');
	}

	function hapus()
	{
		$this->M_laporan_vesselc->hapus();
		redirect('laporan_vesselc');
	}
	
}
 