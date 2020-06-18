<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_forum');
	}

	public function index($id = False)
	{
		if ($id === False) {
			$query['data'] = $this->m_forum->getData();
			$this->load->view('forum/home', $query);
		}else{
			$query['data'] = $this->m_forum->detailData($id);
			$query['komentar'] = $this->m_forum->get_komentar($id);
			$this->load->view('forum/keluhan', $query);
		}
	}
	public function komentar()
	{
		$this->form_validation->set_rules('comment', 'Komentar', 'required|trim');
		if ($this->form_validation->run() == true) {
			$this->m_forum->simpanKomentar();
			redirect('forum/index/'.$this->input->post('id_keluhan'));
		}
	}
}
