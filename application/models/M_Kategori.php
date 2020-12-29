<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Kategori extends CI_Model
{
    private $_tKategori = "tb_kategori";

    public $id_kategori;
    public $nama_kategori;

    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'id_kategori',
                'label' => 'id_kategori',
                'rules' => 'required | numeric'
            ],
            [
                'field' => 'nama_kategori',
                'label' => 'nama_kategori',
                'rules' => 'required'
            ]
        ];
    }

    // Mengambil Semua Kategori
    function getAllKategori()
    {
        return $this->db->get($this->_tKategori)->result();
    }

    // Mengambil Kategori sesuai Keyword
    public function getKategori($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_kategori', $keyword);  
        } 
        return $this->db->get($this->_tKategori, $limit, $start)->result();
    }

    // Menghitung jumlah Kategori
    public function getCountKategori()
    {
        return $this->db->get($this->_tKategori)->num_rows();
    }
    
    // Tambah Kategori
    function addKategori()
    {
        $post = $this->input->post();
        $this->nama_kategori = $post['nama_kategori'];
        $this->db->insert($this->_tKategori, $this);
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-plus"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menambah data Kategori</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Menyunting Kategori
    function updateKategori($id_kategori)
    {
        $post = $this->input->post();
        $this->id_kategori = $post['id_kategori'];
        $this->nama_kategori = $post['nama_kategori'];
        $this->db->update($this->_tKategori, $this, array("id_kategori" => $id_kategori));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-pen"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menyunting data Kategori</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Menghapus Kategori
    function deleteKategori($id_kategori)
    {
        $this->db->delete($this->_tKategori, array("id_kategori" => $id_kategori));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-trash"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menghapus data Kategori</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    public function getKategoriById($id_kategori)
    {
        return $this->db->get_where($this->_tKategori, ["id_kategori" => $id_kategori])->row();
    }


    // private function _deleteImage($id_kategori)
    // {
    //     $gtk = $this->getById($id_kategori);
    //     if ($gtk->image != "camera.jpg") {
    //         $filename = explode(".", $gtk->foto_gtk)[0];
    //         return array_map('unlink', glob(FCPATH . "./vendor/assets/images/$filename.*"));
    //     }
    // }

    // private function _uploadImage()
    // {
    //     $config['upload_path']          =  './vendor/assets/images/';
    //     $config['allowed_types']        = 'gif|jpg|png|JPG';
    //     $config['max_size']             = 9048;
    //     $config['overwrite']            = true;
    //     $config['file_name']            = $_FILES['foto_gtk']['name'];
    //     // 1MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;
    //     $this->load->library('upload', $config);

    //     if ($this->upload->do_upload('foto_gtk')) {
    //         return $this->upload->data("file_name");
    //     }

    //     return "camera.jpg";
    // }
}
