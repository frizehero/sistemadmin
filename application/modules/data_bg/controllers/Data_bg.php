<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_bg extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_bg');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_bg",
			'namafileview' 	=> "V_data_bg",
			'tampil'		=> $this->M_data_bg->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_bg",
			'namafileview' 	=> "V_bg_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_bg",
			'namafileview' 	=> "V_bg_edit",
			'tampil'		=> $this->M_data_bg->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_data_bg->tambah();
		redirect('data_bg');
		
		//redirect('data_bg');
	}

	function edit()
	{
		$this->M_data_bg->edit();
		redirect('data_bg');
	}

	function hapus()
	{
		$this->M_data_bg->hapus();
		redirect('data_bg');
	}
	
}
 