<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Produk extends CI_Model
{
    private $_tProduk = "tb_produk";

    public $id_produk;
    public $nama_produk;
    public $deskripsi;
    public $id_kategori;

    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'id_produk',
                'label' => 'id_produk',
                'rules' => 'required | numeric'
            ],
            [
                'field' => 'nama_produk',
                'label' => 'nama_produk',
                'rules' => 'required'
            ],
            [
                'field' => 'deskripsi',
                'label' => 'deskripsi',
                'rules' => 'required'
            ],
            [
                'field' => 'id_kategori',
                'label' => 'id_kategori',
                'rules' => 'required'
            ]
        ];
    }

    // Mengambil Semua produk
    function getAllProduk()
    {
        return $this->db->get($this->_tProduk)->result();
    }

    // Mengambil produk sesuai Keyword
    public function getProduk($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_produk', $keyword);  
        } 
        return $this->db->get($this->_tProduk, $limit, $start)->result();
    }

    // Menghitung jumlah produk
    public function getCountProduk()
    {
        return $this->db->get($this->_tProduk)->num_rows();
    }
    
    // Tambah produk
    function addProduk()
    {
        $post = $this->input->post();
        $this->nama_produk = $post['nama_produk'];
        $this->db->insert($this->_tProduk, $this);
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-plus"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menambah data produk</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Menyunting produk
    function updateProduk($id_produk)
    {
        $post = $this->input->post();
        $this->id_produk = $post['id_produk'];
        $this->nama_produk = $post['nama_produk'];
        $this->db->update($this->_tProduk, $this, array("id_produk" => $id_produk));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-pen"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menyunting data produk</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Menghapus produk
    function deleteProduk($id_produk)
    {
        $this->db->delete($this->_tProduk, array("id_produk" => $id_produk));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-trash"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menghapus data produk</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    public function getProdukById($id_produk)
    {
        return $this->db->get_where($this->_tProduk, ["id_produk" => $id_produk])->row();
    }


    private function _deleteImage($id_produk)
    {
        $produk = $this->getById($id_produk);
        if ($produk->image != "produk.jpg") {
            $filename = explode(".", $produk->gambar)[0];
            return array_map('unlink', glob(FCPATH . "./img/produk/$filename.*"));
        }
    }

    private function _uploadImage()
    {
        $config['upload_path']          =  './img/produk/';
        $config['allowed_types']        = 'gif|jpg|png|JPG|JPEG';
        $config['max_size']             = 9048;
        $config['overwrite']            = true;
        $config['file_name']            = $_FILES['gambar']['name'];
        // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        return "produk.jpg";
    }
}
