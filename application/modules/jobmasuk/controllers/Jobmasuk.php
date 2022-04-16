<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobmasuk extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_jobmasuk');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "jobmasuk",
			'namafileview' 	=> "V_jobmasuk",
			'tampil'		=> $this->M_jobmasuk->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "jobmasuk",
			'namafileview' 	=> "V_jobmasuk_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "jobmasuk",
			'namafileview' 	=> "V_jobmasuk_edit",
			'tampil'		=> $this->M_jobmasuk->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_jobmasuk->tambah();
		redirect('jobmasuk');
		
		//redirect('jobmasuk');
	}

	function edit()
	{
		$this->M_jobmasuk->edit();
		redirect('jobmasuk');
	}

	function hapus()
	{
		$this->M_jobmasuk->hapus();
		redirect('jobmasuk');
	}
	
}
 