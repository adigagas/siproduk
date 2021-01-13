<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Penjual extends CI_Model
{
    private $_tPenjual = "tb_penjual";

    public $id_penjual;

    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'id_penjual',
                'label' => 'id_penjual',
                'rules' => 'required | numeric'
            ]
        ];
    }

    // Mengambil Semua Penjual
    function getAllPenjual()
    {
        return $this->db->get($this->_tPenjual)->result();
    }

    // Mengambil penjual beserta jumlah produk
    public function getAllPenjualProduk($limit, $start, $keyword = null, $provinsi = null)
    {
        $this->db->select('tb_penjual.id_penjual, tb_penjual.nama_penjual, tb_penjual.provinsi, tb_penjual.gambar_penjual, COUNT(tb_produk.id_produk) as jumlah_produk');
        $this->db->from('tb_penjual');
        $this->db->join('tb_ketersediaan', 'tb_ketersediaan.id_penjual = tb_penjual.id_penjual', 'left');
        $this->db->join('tb_produk', 'tb_produk.id_produk = tb_ketersediaan.id_produk', 'left');
        // $this->db->where('tb_penjual.id_penjual', 'tb_ketersediaan.id_penjual');
        // $this->db->where('tb_produk.id_produk', 'tb_ketersediaan.id_produk');
        $this->db->where('tb_penjual.id_penjual !=', null);
        if ($keyword && $provinsi) {
            $this->db->like('tb_penjual.nama_penjual', $keyword);  
            $this->db->like('tb_penjual.provinsi', $provinsi);  
        } elseif($keyword) {
            $this->db->like('tb_penjual.nama_penjual', $keyword);  
        } elseif($provinsi) {
            $this->db->like('tb_penjual.provinsi', $provinsi);  
        }
        $this->db->group_by('tb_penjual.id_penjual');
        $this->db->order_by('tb_penjual.id_penjual', 'DESC');
        $this->db->limit($limit, $start);

        return $this->db->get()->result();
    }

    // Tambah data penjual
    public function addPenjual()
    {
        $post = $this->input->post();
        $this->nama_penjual = $post['nama_penjual'];
        $this->provinsi = $post['provinsi'];
        $this->gambar_penjual = $this->_uploadImage();
        
        $this->db->insert($this->_tPenjual, $this);
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-plus"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menambah data penjual</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Sunting data penjual
    public function updatePenjual($id_penjual)
    {
        $post = $this->input->post();
        $this->id_penjual = $post['id_penjual'];
        $this->nama_penjual = $post['nama_penjual'];
        $this->provinsi = $post['provinsi'];
        
        // cek gambar baru
        if (!empty($_FILES["gambar_penjual"]["name"])) {
            $this->_deleteImage($post['id_penjual']);
            $this->gambar_penjual = $this->_uploadImage();
        } else {
            $this->gambar_penjual = $post["old_gambar_penjual"];
        }

        // update data penjual
        $this->db->update($this->_tPenjual, $this, array("id_penjual" => $id_penjual));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-pen"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menyunting data penjual</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Hapus data penjual
    public function deletePenjual($id_penjual)
    {
        $this->db->where('id_penjual', $id_penjual);
        $this->db->delete($this->_tPenjual);
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-trash"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menghapus data penjual</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    public function getProvinsi()
    {
        $this->db->distinct();
        $this->db->select('provinsi');
        $this->db->from($this->_tPenjual);
        
        return $this->db->get()->result();
    }

    public function getPenjualByID($id_penjual)
    {
        $this->db->from($this->_tPenjual);
        $this->db->where('id_penjual', $id_penjual);
        return $this->db->get()->row();
    }

    public function getByID($id_penjual)
    {
        $this->db->select('tb_penjual.id_penjual, tb_penjual.nama_penjual, tb_penjual.provinsi, tb_penjual.gambar_penjual, COUNT(tb_produk.id_produk) as jumlah_produk');
        $this->db->from('tb_penjual');
        $this->db->join('tb_ketersediaan', 'tb_ketersediaan.id_penjual = tb_penjual.id_penjual', 'left');
        $this->db->join('tb_produk', 'tb_produk.id_produk = tb_ketersediaan.id_produk', 'left');
        // $this->db->from($this->_tPenjual);
        $this->db->where('tb_penjual.id_penjual !=', null);
        $this->db->where('tb_penjual.id_penjual', $id_penjual);
        $this->db->group_by('tb_penjual.id_penjual');

        return $this->db->get()->row();
    }

    private function _deleteImage($id_penjual)
    {
        $penjual = $this->getById($id_penjual);
        if ($penjual->gambar_penjual != "penjual.jpg") {
            $filename = explode(".", $penjual->gambar_penjual)[0];
            return array_map('unlink', glob(FCPATH . "./img/penjual/$filename.*"));
        }
    }

    private function _uploadImage()
    {
        $new_name                       = "penjual".time().$_FILES["gambar_penjual"]['name'];
        $config['upload_path']          =  './img/penjual/';
        $config['allowed_types']        = 'gif|jpg|png|JPG|JPEG';
        $config['max_size']             = 90480;
        $config['overwrite']            = true;
        $config['file_name']            = $new_name;
        // 10MB
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_penjual')) {
            return $this->upload->data("file_name");
        }
        
        return "penjual.jpg";
    }
}
