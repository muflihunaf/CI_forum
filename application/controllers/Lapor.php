<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->model('m_lapor');
	}
	public function index()
	{
		$data['kategori'] = $this->m_lapor->get_kategori();
		$this->load->view('lapor/v_complain', $data);
	}
	public function simpanLaporan()
	{
		$this->form_validation->set_rules('judul','Judul', 'required|trim');
		$this->form_validation->set_rules('deskripsi','Deskripsi', 'required|trim');
		$this->form_validation->set_rules('tanggal','Tanggal', 'required|trim');
		$this->form_validation->set_rules('id_kategori','Kategori', 'required|trim');
		if ($this->form_validation->run() == TRUE) {
			$this->m_lapor->simpan();
			redirect('forum');
		}
	}
}
