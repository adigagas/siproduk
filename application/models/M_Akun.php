<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Akun extends CI_Model
{
    private $_tAkun = "tb_user";

    public $id_user;
    public $username;

    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'id_user',
                'label' => 'id_user',
                'rules' => 'required | numeric'
            ],
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ]
        ];
    }

    // Mengambil Semua Akun
    function getAllAkun()
    {
        return $this->db->get($this->_tAkun)->result();
    }

    // Mengambil Akun sesuai Keyword
    public function getAkun($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_user', $keyword);  
        } 
        return $this->db->get($this->_tAkun, $limit, $start)->result();
    }

    // Menghitung jumlah Akun
    public function getCountAkun()
    {
        return $this->db->get($this->_tAkun)->num_rows();
    }
    
    // Tambah Akun
    function addAkun()
    {
        $post = $this->input->post();
        $this->username = $post['username'];
        $this->nama_user = $post['nama_user'];
        $this->password = password_hash($post['password'], PASSWORD_DEFAULT);
        $this->foto_user = $this->_uploadImage();
        
        $this->db->insert($this->_tAkun, $this);
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-plus"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menambah data Akun</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Menyunting Akun
    function updateAkun($id_user)
    {
        $post = $this->input->post();
        $this->id_user= $post['id_user'];
        $this->username= $post['username'];
        $this->nama_user = $post['nama_user'];
        $this->password = password_hash($post['password'], PASSWORD_DEFAULT);
        $this->foto_user = $this->_uploadImage();

        if (!empty($_FILES["foto_user"]["name"])) {
            if ($post["old_foto_user"] != 'akun.jpg') {
                unlink(FCPATH . './img/akun/' . $post["old_foto_user"]);
            }
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_foto_user"];
        }

        $this->db->update($this->_tAkun, $this, array("id_user" => $id_user));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-pen"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menyunting data Kategori</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Menghapus Akun
    function deleteAkun($id_user)
    {
        $this->db->delete($this->_tAkun, array("id_user" => $id_user));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-trash"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menghapus data Kategori</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    public function getAkunById($id_user)
    {
        return $this->db->get_where($this->_tAkun, ["id_user" => $id_user])->row();
    }

    private function _deleteImage($id_user)
    {
        $produk = $this->getById($id_user);
        if ($produk->foto_user != "produk.jpg") {
            $filename = explode(".", $produk->foto_user)[0];
            return array_map('unlink', glob(FCPATH . "./img/akun/$filename.*"));
        }
    }
    
    private function _uploadImage()
    {
        $config['upload_path']          =  './img/akun/';
        $config['allowed_types']        = 'gif|jpg|png|JPG|JPEG';
        $config['max_size']             = 90480;
        $config['overwrite']            = true;
        $config['file_name']            = $_FILES['foto_user']['name'];
        // 10MB
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_user')) {
            return $this->upload->data("file_name");
        }
        
        return "akun.jpg";
    }
}