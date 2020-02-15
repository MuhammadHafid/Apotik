<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		$pass = $this->input->post('password');
		$where = array(
			'username' => $this->input->post('username'),
			'password' => md5($pass)
		);
		$result = $this->m_admin->get_where($where, 'log');
		$result = $result->row();
		if($result > 0){
			$data = array(
				'id' => $result->id_admin,
				'status' => "login"
			);
			$this->session->set_userdata($data);
			redirect('admin/dash');
			}
		
	

	if($cek = 3){
		$this->session->set_flashdata('msg',
		'<div class="alert alert-danger">
		<h4>MBOK YO TELITI</h4>
		<p>Enek Sing Salah</p>
		</div>');
		redirect('login');
	}

}
	public function log_out()
	{
		$this->session->sess_destroy();
		$session=array('');
		$this->session->unset_userdata($session);
		redirect('login');
	}
}
