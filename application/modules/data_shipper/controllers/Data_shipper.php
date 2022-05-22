<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_shipper extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_shipper');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_shipper",
			'namafileview' 	=> "V_data_shipper",
			'tampil'		=> $this->M_data_shipper->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_shipper",
			'namafileview' 	=> "V_shipper_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_shipper",
			'namafileview' 	=> "V_shipper_edit",
			'tampil'		=> $this->M_data_shipper->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_data_shipper->tambah();
		redirect('data_shipper');
		
		//redirect('data_shipper');
	}

	function edit()
	{
		$this->M_data_shipper->edit();
		redirect('data_shipper');
	}

	function hapus()
	{
		$this->M_data_shipper->hapus();
		redirect('data_shipper');
	}
	
}
 