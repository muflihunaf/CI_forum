<?php

class M_lapor extends CI_Model{
    function __construct()
    {
        $this->load->database();
    }
    public function get_kategori()
    {
        $data =  $this->db->get('tbl_kategori');
        return $data->result_array();
    }
    public function simpan()
    {
        $gambar = $this->input->post('gambar');
        if ($gambar == NULL) {
            $gambar = NULL;
        }else{
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['overwrite'] = true;
            $this->load->library('upload',$config);
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');
            }else{
                echo 'Gagal Upload Foto';
                print_r($this->upload->display_errors());
            }
        }

        $data = array(
            'judul' => $this->input->post('judul',TRUE),
            'deskripsi' => $this->input->post('deskripsi',true),
            'tanggal' => $this->input->post('tanggal',true),
            'id_kategori' => $this->input->post('id_kategori',true),
            'status' => 'belum ditindak lanjutin',
            'gambar' => $gambar,
            'id_user' => $this->input->post('id_user',true)
        );
        $this->db->insert('tbl_keluhan',$data);
    }
}