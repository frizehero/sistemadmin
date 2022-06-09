<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_bgc extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_laporan_bgc');
		 $this->load->model('login/m_session');
		 // tes github
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

	// ambil bgc_no
	function tampilbgc($id)
	{
		$data = array(
			'namamodule' 	=> "laporan_bgc",
			'namafileview' 	=> "V_laporan_bgc",
			'tampil'		=> $this->M_laporan_bgc->tampil_jobno($id),
			'tampil_jobno'		=> decrypt_url($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview($id)
	{
		$data = array(
			'namamodule' 	=> "laporan_bgc",
			'namafileview' 	=> "V_laporanbgc_tambah",
			'pilbg'			=> $this->M_laporan_bgc->pilbg(),
			'piltb'			=> $this->M_laporan_bgc->piltb(),
			'tampil_jobno'		=> decrypt_url($id),
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

	function tambahbg()
	{

		$this->M_laporan_bgc->tambahbg();
		redirect('laporan_bgc');
		
		//redirect('data_bg');
	}

	function tambahtb()
	{

		$this->M_laporan_bgc->tambahtb();
		redirect('laporan_bgc');
		
		//redirect('data_bg');
	}


	function tambah()
	{
		$bgc_jobno	= $this->input->post('bgc_jobno');

		$this->M_laporan_bgc->tambah();
		redirect('laporan_bgc/tampilbgc/'.encrypt_url($bgc_jobno));
		
		//redirect('laporan_bgc');
	}

	function edit()
	{
		$bgc_jobno	= $this->input->post('bgc_jobno');
		$this->M_laporan_bgc->edit();
		redirect('laporan_bgc/tampilbgc/'.encrypt_url($bgc_jobno));
	}

	function hapus()
	{
		$this->M_laporan_bgc->hapus();
		redirect('laporan_bgc');
	}
	
}
 