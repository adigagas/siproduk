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
        $this->db->limit($limit, $start);

        return $this->db->get()->result();
    }

    public function getProvinsi()
    {
        $this->db->distinct();
        $this->db->select('provinsi');
        $this->db->from($this->_tPenjual);
        
        return $this->db->get()->result();
    }

    
}
