<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_jabatan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_jabatan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_jabatan",
			'namafileview' 	=> "V_data_jabatan",
			'tampil'		=> $this->M_data_jabatan->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_jabatan",
			'namafileview' 	=> "V_jabatan_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_jabatan",
			'namafileview' 	=> "V_jabatan_edit",
			'tampil'		=> $this->M_data_jabatan->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_data_jabatan->tambah();
		redirect('data_jabatan');
		
		//redirect('data_jabatan');
	}

	function edit()
	{
		$this->M_data_jabatan->edit();
		redirect('data_jabatan');
	}

	function hapus()
	{
		$this->M_data_jabatan->hapus();
		redirect('data_jabatan');
	}
	
}
 