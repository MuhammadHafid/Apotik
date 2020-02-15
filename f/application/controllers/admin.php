<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function dis()
	{
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/konsumen');
		$this->load->view('section/footer');
	}

	public function dash()
	{
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('section/footer');
	}

	public function obat()
	{
		$data['data'] = $this->m_admin->obat('m_obat')->result();
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_obat',$data);
		$this->load->view('section/footer');
	}

	public function kar()
	{
		$data['data'] = $this->m_admin->obat('m_karyawan')->result();
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_karyawan',$data);
		$this->load->view('section/footer');
	}

	public function sup()
	{
		$data['data'] = $this->m_admin->obat('m_supli')->result();
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_supli',$data);
		$this->load->view('section/footer');
	}

	public function penjual()
	{
		$data['data'] = $this->m_admin->obat('m_penjual')->result();
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_penjual',$data);
		$this->load->view('section/footer');
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////
	public function addpenjual()
	{
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_addpenjual');
		$this->load->view('section/footer');
	}

	public function s_penjual()
	{
		$id_t  = $this->input->post('id_t');
		$kasir = $this->input->post('kasir');
		$tgl = $this->input->post('tgl');
		$j_barang = $this->input->post('j_barang');
		
		$data = array('id_t'=>$id_t, 'kasir'=>$kasir, 'tgl'=>$tgl);
		$this->m_admin->tambah($data,'m_penjual');
		redirect(base_url('admin/penjual'));
	}

	public function t_edit()
	{
		$where = array('id_t');
		$data['user'] = $this->m_admin->get_where($where,'m_penjual')->result();
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/e_penjual', $data);
		$this->load->view('section/footer');
	}

	public function ak_edit(){
		$id_t = $this->input->post('id');
		$kasir = $this->input->post('kasir');
		$tgl = $this->input->post('tgl');
		$telp = $this->input->post('telp');

		$data = array(
			'id_t' => $id_t,
			'kasir' => $kasir,
			'tgl' => $tgl,
			
		);
		$where = array('id_t' => $id_t);
		$this->m_admin->update($where, $data,'m_penjual');
		redirect('admin/penjual');


	}

	public function klek($nama)
	{
		$where = array ('id_t' => $nama);
		$res = $this->m_admin->deletedata('m_penjual',$where);
		if($res>=1){
		redirect('admin/penjual');
		}
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////
	public function addsupli()
	{
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_addsupli');
		$this->load->view('section/footer');
	}

	public function simpansupli()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$j_barang = $this->input->post('j_barang');
		
		$data = array('nama'=>$nama, 'alamat'=>$alamat, 'telp'=>$telp, 'j_barang'=>$j_barang);
		$this->m_admin->tambah($data,'m_supli');
		redirect(base_url('admin/sup'));
	}

	public function g_edit()
	{
		$where = array('id_bar');
		$data['user'] = $this->m_admin->get_where($where,'m_supli')->result();
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/e_supli', $data);
		$this->load->view('section/footer');
	}

	public function tahu(){
		$id_bar = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$j_barang = $this->input->post('j_barang');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'telp' => $telp,
			'j_barang' => $j_barang,
			
		);
		$where = array('id_bar' => $id_bar);
		$this->m_admin->update($where, $data,'m_supli');
		redirect('admin/sup');


	}

	public function del_t($nama)
	{
		$where = array ('id_bar' => $nama);
		$res = $this->m_admin->deletedata('m_supli',$where);
		if($res>=1){
		redirect('admin/sup');
		}
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////

	public function addkaryawan()
	{
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_addkaryawan');
		$this->load->view('section/footer');
	}

	public function simpankaryawan()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		
		$data = array('nama'=>$nama, 'alamat'=>$alamat, 'telp'=>$telp);
		$this->m_admin->tambah($data,'m_karyawan');
		redirect(base_url('admin/kar/'));
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
		$where = array('nik' => $nik);
		$this->m_admin->update($where, $data,'m_karyawan');
		redirect('admin/kar');


	}

	public function del_k($nama)
	{
		$where = array ('nik' => $nama);
		$res = $this->m_admin->deletedata('m_karyawan',$where);
		if($res>=1){
		redirect('admin/kar');
		}
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////


	public function addobat()
	{
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_addobat');
		$this->load->view('section/footer');
	}

	public function simpanobat()
	{
		$nama = $this->input->post('nama');
		$stok = $this->input->post('stok');
		$kategori = $this->input->post('kategori');
		$suplier = $this->input->post('suplier');
		$tgli    = $this->input->post('tgli');
		
		$data = array('nama'=>$nama, 'stok'=>$stok, 'kategori'=>$kategori, 'suplier'=>$suplier, 'tgli'=>$tgli);
		$this->m_admin->tambah($data,'m_obat');
		redirect(base_url('admin/obat'));
	}
public function edit()
	{
		$where = array('kode');
		$data['user'] = $this->m_admin->get_where($where,'m_obat')->result();
		$this->load->view('section/head');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/e_obat', $data);
		$this->load->view('section/footer');
	}

	public function oteote(){
		$kode = $this->input->post('id');
		$nama = $this->input->post('nama');
		$stok = $this->input->post('stok');
		$kategori = $this->input->post('kategori');
		$suplier = $this->input->post('suplier');
		$tgli = $this->input->post('tgli');

		$data = array(
			'nama' => $nama,
			'stok' => $stok,
			'kategori' => $kategori,
			'suplier' => $suplier,
			'tgli'    => $tgli,
			
		);
		$where = array('kode' => $kode);
		$this->m_admin->update($where, $data,'m_obat');
		redirect('admin/obat');


	}
	public function del($nama)
	{
		$where = array ('kode' => $nama);
		$res = $this->m_admin->deletedata('m_obat',$where);
		if($res>=1){
		redirect('admin/obat');
		}



	}




}
