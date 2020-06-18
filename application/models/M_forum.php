<?php
class M_forum extends CI_Model{
    function __construct()
    {
        $this->load->database();
    }
    public function getData($limit = 15)
    {
        $this->db->select('tbl_keluhan.*,tbl_kategori.nama as nama_kategori, tbl_kategori.id_kategori, tbl_user.*');
        $this->db->from('tbl_keluhan');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_keluhan.id_kategori');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_keluhan.id_user');
        $this->db->order_by('id_keluhan','DESC');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function detailData($id)
    {
        $this->db->select('tbl_keluhan.*,tbl_kategori.nama as nama_kategori, tbl_kategori.id_kategori, tbl_user.*');
        $this->db->from('tbl_keluhan');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_keluhan.id_kategori');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_keluhan.id_user');
        $this->db->where('id_keluhan =', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function get_komentar($id)
    {
        $this->db->select('tbl_keluhan.id_keluhan, tbl_balasan.*, tbl_user.*');
        $this->db->from('tbl_keluhan');
        $this->db->join('tbl_balasan', 'tbl_balasan.id_keluhan = tbl_keluhan.id_keluhan');
        $this->db->join('tbl_user', 'tbl_balasan.id_user = tbl_user.id_user');
        $this->db->where('tbl_balasan.id_keluhan =', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function dataHariIni()
    {
        $date = date('Y-m-d');
        $data = $this->db->get_where('tbl_keluhan',array('tanggal' => $date));
        return $data->num_rows();
    }
    public function dataBulanIni()
    {
        $data = $this->db->get_where('tbl_keluhan',array('month(tanggal)' => date('m')));
        return $data->num_rows();
    }
    public function dataTahunIni()
    {
        $data = $this->db->get_where('tbl_keluhan',array('year(tanggal)' => date('Y')));
        return $data->num_rows();
    }
    public function simpanKomentar()
    {
        $data = array(
            'id_keluhan' => $this->input->post('id_keluhan',true),
            'id_user' => $this->input->post('id_user',true),
            'balasan' => $this->input->post('comment',true)
        );
        $this->db->insert('tbl_balasan',$data);
    }
    public function ubahStatus($id)
    {
        $query = array(
            'id_keluhan' => $id,
            'status' => $this->input->post('status',true)
        );
        $this->db->where('id_keluhan',$id);
        $this->db->update('tbl_keluhan',$query);
    }
}