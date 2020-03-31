<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barui_sandi_control extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('barui_sandi_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('ubah_sandi');
	}

	public function perbarui($id)
	{
		$where = array('email'=>$id);
		$this->load->view('ubah_sandi/index',$data);
	}

	public function perbarui_action()
	{
		$where = array('email' => $this->input->post('email'));
		$data = 'password' => $this->input->post('password_baru');
		$this->barui_sandi->perbarui($where, $data,'mahasiswa');
		redirect('ubah_sandi');
	}

}