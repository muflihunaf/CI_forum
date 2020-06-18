<?php

class M_user extends CI_Model{
    function __construct()
    {
        $this->load->database();
    }
    public function insert_user()
    {
        $data = array(
            'NIM' => htmlspecialchars($this->input->post('nim',true)),
            'nama' => htmlspecialchars($this->input->post('nama',true)),
            'username' => htmlspecialchars($this->input->post('username',true)),
            'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'email' => htmlspecialchars($this->input->post('email',true)),
            'role' => 0
        );
        $this->db->insert('tbl_user',$data);
    }
    public function get_user()
    {
        $data = $this->db->get_where('tbl_user', ['role' => 0]);
        return $data->result_array();
    }
}