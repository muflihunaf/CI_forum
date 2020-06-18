<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lapor');
		$this->load->model('m_forum');
	}
	public function index()
	{
		$data['hariIni'] = $this->m_forum->dataHariIni();
		$data['bulanIni'] = $this->m_forum->dataBulanIni();
		$data['tahunIni'] = $this->m_forum->dataTahunIni();
		$data['kategori'] = $this->m_lapor->get_kategori();
		$data['laporan'] = $this->m_forum->getData(4);
		$this->load->view('home',$data);
	}
}
