<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }
	public function login()
	{
        if ($this->session->has_userdata('username')) {
            redirect('home');
        }
        $this->form_validation->set_rules('email','Email','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/v_login');
        }else{
            $this->_masuk();
        }
    }
    private function _masuk(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id_user' => $user['id_user'],
                    'NIM' => $user['NIM'],
                    'nama' => $user['nama'],
                    'email' => $user['email'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                ];
                $this->session->set_userdata($data);
                if ($this->session->userdata['role'] == 0) {
                    redirect('home');
                }else{
                    redirect('admin');
                }
            }else{
                $this->session->set_flashdata('message','<script>window.alert(`Password Salah`)</script>');
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('message','<script>window.alert(`User Tidak ada`)</script>');
            redirect('login');
        }
    }
    public function register()
    {
        if ($this->session->has_userdata('username')) {
            redirect('home');
        }
        $this->form_validation->set_rules('nim','NIM', 'required|trim|numeric|is_unique[tbl_user.NIM]', [
            'is_unique' => 'Nim Telah Terdaftar'
        ]);
        $this->form_validation->set_rules('email','E-mail', 'required|trim|is_unique[tbl_user.email]', [
            'is_unique' => 'Email Telah Terdaftar'
        ]);
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim|matches[password2]', [
            'matches' => 'Password Tidak Sama'
        ]);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/v_register');
        }else{
            $this->m_user->insert_user();
            $this->session->set_flashdata('message','<script>window.alert(`berhasil Daftar`)</script>');
            redirect('login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('NIM');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        redirect('home');
    }
}
