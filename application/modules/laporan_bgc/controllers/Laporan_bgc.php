<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_bgc extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_laporan_bgc');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "laporan_bgc",
			'namafileview' 	=> "V_laporan_bgc",
			'tampil'		=> $this->M_laporan_bgc->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "laporan_bgc",
			'namafileview' 	=> "V_laporanbgc_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "laporan_bgc",
			'namafileview' 	=> "V_laporanbgc_edit",
			'tampil'		=> $this->M_laporan_bgc->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_laporan_bgc->tambah();
		redirect('laporan_bgc');
		
		//redirect('laporan_bgc');
	}

	function edit()
	{
		$this->M_laporan_bgc->edit();
		redirect('laporan_bgc');
	}

	function hapus()
	{
		$this->M_laporan_bgc->hapus();
		redirect('laporan_bgc');
	}
	
}
 