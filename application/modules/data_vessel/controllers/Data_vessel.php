<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_vessel extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_vessel');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_vessel",
			'namafileview' 	=> "V_data_vessel",
			'tampil'		=> $this->M_data_vessel->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_vessel",
			'namafileview' 	=> "V_vessel_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_vessel",
			'namafileview' 	=> "V_vessel_edit",
			'tampil'		=> $this->M_data_vessel->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_data_vessel->tambah();
		redirect('data_vessel');
		
		//redirect('data_vessel');
	}

	function edit()
	{
		$this->M_data_vessel->edit();
		redirect('data_vessel');
	}

	function hapus()
	{
		$this->M_data_vessel->hapus();
		redirect('data_vessel');
	}
	
}
 