<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pembeli extends CI_Model
{
    private $_tPembeli = "tb_pembeli";

    public $id_pembeli;
    public $nama_pembeli;

    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'id_pembeli',
                'label' => 'id_pembeli',
                'rules' => 'required | numeric'
            ],
            [
                'field' => 'nama_pembeli',
                'label' => 'nama_pembeli',
                'rules' => 'required'
            ]
        ];
    }

    // Mengambil Semua Pembeli
    function getAllPembeli()
    {
        return $this->db->get($this->_tPembeli)->result();
    }

    // Mengambil Pembeli sesuai Keyword
    public function getPembeli($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_pembeli', $keyword);  
        } 
        return $this->db->get($this->_tPembeli, $limit, $start)->result();
    }

    // Menghitung jumlah Pembeli
    public function getCountPembeli()
    {
        return $this->db->get($this->_tPembeli)->num_rows();
    }
    
    // Tambah Pembeli
    function addPembeli($id_pembeli)
    {
        $post = $this->input->post();
    
        $this->id_pembeli = $id_pembeli;
        $this->nama_pembeli = $post['nama_pembeli'];
        $this->no_telp = $post['no_telp'];
        $this->provinsi = $post['provinsi'];
        $this->kota = $post['kota'];
        $this->kode_pos = $post['kode_pos'];
        $this->alamat_lengkap = $post['alamat_lengkap'];

        $this->db->insert($this->_tPembeli, $this);
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-plus"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menambah data Pembeli</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Menyunting Pembeli
    function updatePembeli($id_pembeli)
    {
        $post = $this->input->post();
        $this->id_pembeli = $post['id_pembeli'];
        $this->nama_pembeli = $post['nama_pembeli'];
        $this->no_telp = $post['no_telp'];
        $this->provinsi = $post['provinsi'];
        $this->kota = $post['kota'];
        $this->kode_pos = $post['kode_pos'];
        $this->alamat_lengkap = $post['alamat_lengkap'];

        $this->db->update($this->_tPembeli, $this, array("id_pembeli" => $id_pembeli));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-pen"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menyunting data Pembeli</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Menghapus Pembeli
    function deletePembeli($id_pembeli)
    {
        $this->db->delete($this->_tPembeli, array("id_pembeli" => $id_pembeli));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-trash"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menghapus data Pembeli</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    public function getPembeliById($id_pembeli)
    {
        return $this->db->get_where($this->_tPembeli, ["id_pembeli" => $id_pembeli])->row();
    }


    // private function _deleteImage($id_pembeli)
    // {
    //     $gtk = $this->getById($id_pembeli);
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
