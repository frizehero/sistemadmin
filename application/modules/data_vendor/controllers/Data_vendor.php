<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_vendor extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_vendor');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_vendor",
			'namafileview' 	=> "V_data_vendor",
			'tampil'		=> $this->M_data_vendor->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_vendor",
			'namafileview' 	=> "V_vendor_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_vendor",
			'namafileview' 	=> "V_vendor_edit",
			'tampil'		=> $this->M_data_vendor->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_data_vendor->tambah();
		redirect('data_vendor');
		
		//redirect('data_vendor');
	}

	function edit()
	{
		$this->M_data_vendor->edit();
		redirect('data_vendor');
	}

	function hapus()
	{
		$this->M_data_vendor->hapus();
		redirect('data_vendor');
	}
	
}
 