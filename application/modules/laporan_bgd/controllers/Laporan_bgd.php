<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_bgd extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_laporan_bgd');
		 $this->load->model('login/m_session');
		 // tes github
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "laporan_bgd",
			'namafileview' 	=> "V_laporan_bgd",
			'tampil'		=> $this->M_laporan_bgd->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// ambil bgd_no
	function tampilbgd($id)
	{
		$data = array(
			'namamodule' 	=> "laporan_bgd",
			'namafileview' 	=> "V_laporan_bgd",
			'tampil'		=> $this->M_laporan_bgd->tampil_jobnod($id),
			'tampil_jobnod'		=> decrypt_url($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview($id)
	{
		$data = array(
			'namamodule' 	=> "laporan_bgd",
			'namafileview' 	=> "V_laporanbgd_tambah",
			'pilbg'			=> $this->M_laporan_bgd->pilbg(),
			'piltb'			=> $this->M_laporan_bgd->piltb(),
			'tampil_jobnod'		=> decrypt_url($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "laporan_bgd",
			'namafileview' 	=> "V_laporanbgd_edit",
			'tampil'		=> $this->M_laporan_bgd->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambahbg()
	{

		$this->M_laporan_bgd->tambahbg();
		redirect('laporan_bgd');
		
		//redirect('data_bg');
	}

	function tambahtb()
	{

		$this->M_laporan_bgd->tambahtb();
		redirect('laporan_bgd');
		
		//redirect('data_bg');
	}


	function tambah()
	{
		$bgd_jobno	= $this->input->post('bgd_jobno');

		$this->M_laporan_bgd->tambah();
		redirect('laporan_bgd/tampilbgd/'.encrypt_url($bgd_jobno));
		
		//redirect('laporan_bgc');
	}

	function edit()
	{
		$bgd_jobno	= $this->input->post('bgd_jobno');
		$this->M_laporan_bgd->edit();
		redirect('laporan_bgd/tampilbgd/'.encrypt_url($bgd_jobno));
	}

	function hapus()
	{
		$this->M_laporan_bgd->hapus();
		redirect('laporan_bgd');
	}
	
}
 