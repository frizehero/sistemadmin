<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobmasuk_d extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_jobmasuk_d');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "jobmasuk_d",
			'namafileview' 	=> "V_jobmasuk_d",
			'tampil'		=> $this->M_jobmasuk_d->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "jobmasuk_d",
			'namafileview' 	=> "V_jobmasukd_tambah",
			'pilpt'			=> $this->M_jobmasuk_d->pilpt(),
			'pilshipper'	=> $this->M_jobmasuk_d->pilshipper(),
			'pilvessel'		=> $this->M_jobmasuk_d->pilvessel(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "jobmasuk_d",
			'namafileview' 	=> "V_jobmasukd_edit",
			'tampil'		=> $this->M_jobmasuk_d->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_jobmasuk_d->tambah();
		redirect('jobmasuk_d');
		
		//redirect('jobmasuk_d');
	}

	function edit()
	{
		$this->M_jobmasuk_d->edit();
		redirect('jobmasuk_d');
	}

	function hapus()
	{
		$this->M_jobmasuk_d->hapus();
		redirect('jobmasuk_d');
	}
	
}
 