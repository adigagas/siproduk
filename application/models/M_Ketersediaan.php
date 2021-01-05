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


    public function getKetersediaanByProdukId($id_produk)
    {
        $this->db->from('tb_ketersediaan');
        $this->db->join('tb_penjual', 'tb_penjual.id_penjual = tb_ketersediaan.id_penjual', 'left');
        $this->db->where('tb_ketersediaan.id_produk', $id_produk);

        return $this->db->get()->result();
    }

    
}
