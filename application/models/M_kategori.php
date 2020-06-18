<?php

class M_kategori extends CI_Model{
    function __construct()
    {
        $this->load->database();
    }
    public function get_kategori($id = False)
    {
        if ($id === False) {
            $data = $this->db->get('tbl_kategori');
            return $data->result_array();
        }
        $data = $this->db->get_where('tbl_kategori', array('id_kategori' => $id));
        return $data->row_array();
    }
    public function insert_kategori()
    {
        $data = array(
            'nama' => $this->input->post('kategori',true),
        );
        $this->db->insert('tbl_kategori',$data);
    }
    public function updateKategori($id)
    {
        $data = array(
            'nama' => $this->input->post('kategori',true),
        );
        $this->db->where('id_kategori', $id);
        return $this->db->update('tbl_kategori',$data);
    }
    public function deleteKategori($id)
    {
        return $this->db->delete('tbl_kategori', array('id_kategori' => $id ));
    }
}