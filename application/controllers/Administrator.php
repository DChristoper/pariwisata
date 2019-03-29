<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] = 'admin/konten_beranda_admin';
		$isi['judul'] = 'Dashboard';
		$isi['sub_judul'] = '';
		$isi['hotel'] = $this->db->query("SELECT id_hotel FROM hotel;")->num_rows();
		$isi['wisata'] = $this->db->query("SELECT id_wisata FROM wisata;")->num_rows();
		$isi['kuliner'] = $this->db->query("SELECT id_resto FROM kuliner;")->num_rows();
		$isi['testimoni'] = $this->db->query("SELECT id_testimoni FROM testimoni;")->num_rows();

		$this->load->view('admin/tampilan_beranda_admin', $isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}
