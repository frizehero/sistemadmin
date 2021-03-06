<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_divisi extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_divisi');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_divisi",
			'namafileview' 	=> "V_data_divisi",
			'tampil'		=> $this->M_data_divisi->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_divisi",
			'namafileview' 	=> "V_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_divisi",
			'namafileview' 	=> "V_edit",
			'tampil'		=> $this->M_data_divisi->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function listview($id)
	{

		$data = array(
			'namamodule' 	=> "data_divisi",
			'namafileview' 	=> "V_listview",
			'tampil'		=> $this->M_data_divisi->tampiledit($id),
			'tampillist'		=> $this->M_data_divisi->tampillist($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_data_divisi->tambah();
		redirect('data_divisi');
		
		//redirect('data_divisi');
	}

	function tambah_subdivisi()
	{
		$id 		= $this->input->post('id');

		$this->M_data_divisi->tambah_subdivisi();
		redirect('data_divisi/listview/'.encrypt_url($id));
		
	}

	function edit()
	{
		$this->M_data_divisi->edit();
		redirect('data_divisi');
	}

	function hapus()
	{
		$this->M_data_divisi->hapus();
		redirect('data_divisi');
	}


	function hapus_subdivisi()
	{
		$id_divisi 		= $this->input->post('id_divisi');
		
		$this->M_data_divisi->hapus_subdivisi();
		redirect('data_divisi/listview/'.encrypt_url($id_divisi));
	}
	
}
 