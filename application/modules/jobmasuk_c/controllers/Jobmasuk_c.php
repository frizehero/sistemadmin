<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobmasuk_c extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_jobmasuk_c');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "jobmasuk_c",
			'namafileview' 	=> "V_jobmasuk_c",
			'tampil'		=> $this->M_jobmasuk_c->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "jobmasuk_c",
			'namafileview' 	=> "V_jobmasukc_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "jobmasuk_c",
			'namafileview' 	=> "V_jobmasukc_edit",
			'tampil'		=> $this->M_jobmasuk_c->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_jobmasuk_c->tambah();
		redirect('jobmasuk_c');
		
		//redirect('jobmasuk_c');
	}

	function edit()
	{
		$this->M_jobmasuk_c->edit();
		redirect('jobmasuk_c');
	}

	function hapus()
	{
		$this->M_jobmasuk_c->hapus();
		redirect('jobmasuk_c');
	}
	
}
 