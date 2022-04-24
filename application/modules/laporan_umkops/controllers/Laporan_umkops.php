<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_umkops extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_laporan_umkops');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "laporan_umkops",
			'namafileview' 	=> "V_laporan_umkops",
			'tampil'		=> $this->M_laporan_umkops->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "laporan_umkops",
			'namafileview' 	=> "V_lapumkops_tambah",
			'piljobno'		=> $this->M_laporan_umkops->piljobno(),
			'piljobnod'		=> $this->M_laporan_umkops->piljobnod(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "laporan_umkops",
			'namafileview' 	=> "V_lapumkops_edit",
			'tampil'		=> $this->M_laporan_umkops->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_laporan_umkops->tambah();
		redirect('laporan_umkops');
		
		//redirect('laporan_umkops');
	}

	function edit()
	{
		$this->M_laporan_umkops->edit();
		redirect('laporan_umkops');
	}

	function hapus()
	{
		$this->M_laporan_umkops->hapus();
		redirect('laporan_umkops');
	}
	
}
 