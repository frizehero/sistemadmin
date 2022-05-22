<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_tb extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_tb');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_tb",
			'namafileview' 	=> "V_data_tb",
			'tampil'		=> $this->M_data_tb->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_tb",
			'namafileview' 	=> "V_tb_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_tb",
			'namafileview' 	=> "V_tb_edit",
			'tampil'		=> $this->M_data_tb->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_data_tb->tambah();
		redirect('data_tb');
		
		//redirect('data_tb');
	}

	function edit()
	{
		$this->M_data_tb->edit();
		redirect('data_tb');
	}

	function hapus()
	{
		$this->M_data_tb->hapus();
		redirect('data_tb');
	}
	
}
 