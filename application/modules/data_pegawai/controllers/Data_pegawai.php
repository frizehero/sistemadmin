<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pegawai extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_pegawai');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_pegawai",
			'namafileview' 	=> "V_data_pegawai",
			'tampil'		=> $this->M_data_pegawai->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_pegawai",
			'namafileview' 	=> "V_pegawai_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_pegawai",
			'namafileview' 	=> "V_pegawai_edit",
			'tampil'		=> $this->M_data_pegawai->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// Halaman Listview
	function listview($id)
	{

		$data = array(
			'namamodule' 	=> "data_pegawai",
			'namafileview' 	=> "V_listview",
			'tampil'		=> $this->M_data_pegawai->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_data_pegawai->tambah();
		redirect('data_pegawai');
		
		//redirect('data_pegawai');
	}

	function edit()
	{
		$this->M_data_pegawai->edit();
		redirect('data_pegawai');
	}

	function hapus()
	{
		$this->M_data_pegawai->hapus();
		redirect('data_pegawai');
	}
	
}
 