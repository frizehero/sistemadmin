<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uangmuka_ops extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_uangmuka_ops');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "uangmuka_ops",
			'namafileview' 	=> "V_uangmuka_ops",
			'tampil'		=> $this->M_uangmuka_ops->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "uangmuka_ops",
			'namafileview' 	=> "V_uangmukaops_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "uangmuka_ops",
			'namafileview' 	=> "V_uangmukaops_edit",
			'tampil'		=> $this->M_uangmuka_ops->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_uangmuka_ops->tambah();
		redirect('uangmuka_ops');
		
		//redirect('uangmuka_ops');
	}

	function edit()
	{
		$this->M_uangmuka_ops->edit();
		redirect('uangmuka_ops');
	}

	function hapus()
	{
		$this->M_uangmuka_ops->hapus();
		redirect('uangmuka_ops');
	}
	
}
 