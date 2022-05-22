<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_klien extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_klien');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_klien",
			'namafileview' 	=> "V_data_klien",
			'tampil'		=> $this->M_data_klien->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_klien",
			'namafileview' 	=> "V_klien_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_klien",
			'namafileview' 	=> "V_klien_edit",
			'tampil'		=> $this->M_data_klien->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_data_klien->tambah();
		redirect('data_klien');
		
		//redirect('data_klien');
	}

	function edit()
	{
		$this->M_data_klien->edit();
		redirect('data_klien');
	}

	function hapus()
	{
		$this->M_data_klien->hapus();
		redirect('data_klien');
	}
	
}
 