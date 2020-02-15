<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function kar()
	{
		$data['data'] = $this->m_admin->kar('m_karyawan')->result();
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_karyawan',$data);
		$this->load->view('section/footer');
	}

	public function addkaryawan()
	{
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_karyawan');
		$this->load->view('section/footer');
	}

	public function simpankaryawan()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		
		$data = array('nama'=>$nama, 'alamat'=>$alamat, 'telp'=>$telp);
		$this->m_admin->tambah($data,'m_karyawan');
		redirect(base_url('karyawan/kar'));
	}
public function v_edit()
	{
		$where = array('nik');
		$data['user'] = $this->m_admin->get_where($where,'m_karyawan')->result();
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/e_karyawan', $data);
		$this->load->view('section/footer');
	}

	public function a_edit(){
		$nik = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$suplier = $this->input->post('suplier');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'telp' => $telp,
			
		);
		$where = array('id' => $id);
		$this->m_admin->update($where, $data,'m_karyawan');
		redirect('karyawan/kar');


	}
	public function del_k($nama)
	{
		$where = array ('kode' => $kode);
		$res = $this->m_admin->deletedata('m_karyawan',$where);
		if($res>=1){
		redirect('karyawan/kar');
		}
	}




}
