<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_register');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function input()
	{
		$username     = $this->input->post('username');
		$password     = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email        = $this->input->post('email');

		$data = array(
			'username'     => $username,
			'password'     => $password,
			'nama_lengkap' => $nama_lengkap,
			'email'        => $email
		);

		$this->m_register->input_member($data, 'member');
		redirect('login');
	}
}
