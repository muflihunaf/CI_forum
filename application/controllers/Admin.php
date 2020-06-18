<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_kategori');
        $this->load->model('m_forum');
        if ($this->session->userdata('role') == 0) {
            redirect('home');
        }
    }
	public function index()
	{
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = count($this->m_user->get_user());
        $data['laporan'] = $this->m_forum->dataTahunIni();
        $this->load->view('partial/header',$data);
        $this->load->view('admin/home',$data);
        $this->load->view('partial/footer');
    }
    public function lihat_laporan()
    {
        $data['title'] = 'Laporan';
        $data['laporan'] = $this->m_forum->getData();
        $this->load->view('partial/header',$data);
        $this->load->view('admin/v-laporan',$data);
        $this->load->view('partial/footer');
    }
    public function editStatus($id)
    {
        $this->form_validation->set_rules('status','status', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Edit status';
            $data['laporan'] = $this->m_forum->detailData($id);
            $this->load->view('partial/header',$data);
            $this->load->view('admin/v-edit', $data);
            $this->load->view('partial/footer');
        }else{
            $this->m_forum->ubahStatus($id);
            redirect('admin/laporan');
        }
    }
    public function kategori()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->m_kategori->get_kategori();
        $this->load->view('partial/header',$data);
        $this->load->view('kategori/v-kategori');
        $this->load->view('partial/footer');
    }
    public function simpan_kategori()
    {
        $this->form_validation->set_rules('kategori','Kategori', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/kategori');
        }else{
            $this->m_kategori->insert_kategori();
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Menambah Data!</div>');
            redirect('admin/kategori');
        }
    }
    public function EditKategori($id)
    {
        $this->form_validation->set_rules('kategori','Kategori', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Edit Kategori';
            $data['kategori'] = $this->m_kategori->get_kategori($id);
            $this->load->view('partial/header',$data);
            $this->load->view('kategori/v-edit', $data);
            $this->load->view('partial/footer');
        }else{
            $this->m_kategori->updateKategori($id);
            redirect('admin/kategori');
        }
    }
    public function hapusKategori($id)
    {
        $this->m_kategori->deleteKategori($id);
        redirect('admin/kategori');
    }
    public function user()
    {
        $data['title'] = 'Users';
        $data['users'] = $this->m_user->get_user();
        $this->load->view('partial/header',$data);
        $this->load->view('user/v-home',$data);
        $this->load->view('partial/footer');
    }
    public function simpanUser()
    {
        $this->form_validation->set_rules('nim','NIM', 'required|trim|numeric|is_unique[tbl_user.NIM]', [
            'is_unique' => 'Nim Telah Terdaftar'
        ]);
        $this->form_validation->set_rules('email','E-mail', 'required|trim|is_unique[tbl_user.email]', [
            'is_unique' => 'Email Telah Terdaftar'
        ]);
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if ($this->form_validation->run() == true) {
            $this->m_user->insert_user();
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Menambah Data!</div>');
            redirect('admin/user');
        }
    }
}
