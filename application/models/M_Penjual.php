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

    
}
