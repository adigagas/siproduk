<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Ketersediaan extends CI_Model
{
    private $_tKetersediaan = "tb_ketersediaan";

    public $id_ketersediaan;

    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'id_ketersediaan',
                'label' => 'id_ketersediaan',
                'rules' => 'required | numeric'
            ]
        ];
    }

    public function addKetersediaan($id_produk)
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->situs = $post['situs'];
        $this->tautan_produk = $post['tautan_produk'];
        $this->harga_satuan = $post['harga_satuan'];
        $this->stok = $post['stok'];
        $this->log_date = date("Y-m-d");
        $this->log_time = date("h:i:sa");
        $this->id_produk = $post['id_produk'];
        $this->id_penjual = $post['id_penjual'];
        
        $this->db->insert($this->_tKetersediaan, $this);
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-plus"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menambah data ketersediaan produk</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    public function editKetersediaan($id_ketersediaan)
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_ketersediaan = $post['id_ketersediaan'];
        $this->situs = $post['situs'];
        $this->tautan_produk = $post['tautan_produk'];
        $this->harga_satuan = $post['harga_satuan'];
        $this->stok = $post['stok'];
        $this->log_date = date("Y-m-d");
        $this->log_time = date("h:i:sa");
        $this->id_produk = $post['id_produk'];
        $this->id_penjual = $post['id_penjual'];
        
        $this->db->update($this->_tKetersediaan, $this, array("id_ketersediaan" => $id_ketersediaan));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-edit"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menyunting data ketersediaan produk</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    public function delKetersediaan($id_ketersediaan)
    {
        $this->db->where('id_ketersediaan', $id_ketersediaan);
        $this->db->delete($this->_tKetersediaan);
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-trash"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menghapus data ketersediaan produk</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    public function delKetersediaanByProdukID($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete($this->_tKetersediaan);
    }

    public function selectHargaMin($id_produk)
    {
        $this->db->select_min('harga_satuan');
        $this->db->from('tb_ketersediaan');
        $this->db->where('id_produk', $id_produk);
        return $this->db->get()->row();
    }
    
    public function getById($id_ketersediaan)
    {
        $this->db->from($this->_tKetersediaan);
        $this->db->where('id_ketersediaan', $id_ketersediaan);
        return $this->db->get()->row();
    }

    public function getKetersediaanByProdukId($id_produk)
    {
        $this->db->from('tb_ketersediaan');
        $this->db->join('tb_penjual', 'tb_penjual.id_penjual = tb_ketersediaan.id_penjual', 'left');
        $this->db->where('tb_ketersediaan.id_produk', $id_produk);

        return $this->db->get()->result();
    }

    
}
