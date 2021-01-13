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
    public function getProduk($limit, $start, $keyword = null, $f_kategori = null, $hargamin = null, $hargamax = null)
    {
        if ($keyword && $f_kategori && $hargamin && $hargamax) {
            $this->db->like('nama_produk', $keyword);  
            $this->db->where('id_kategori', $f_kategori);
            $this->db->where('harga_terendah >', $hargamin - 1);
            $this->db->where('harga_terendah <', $hargamax + 1);
        } elseif ($keyword && $hargamin && $hargamax) {
            $this->db->like('nama_produk', $keyword);  
            $this->db->where('harga_terendah >', $hargamin - 1);
            $this->db->where('harga_terendah <', $hargamax + 1);
        } elseif ($f_kategori && $hargamin && $hargamax) {
            $this->db->where('id_kategori', $f_kategori);
            $this->db->where('harga_terendah >', $hargamin - 1);
            $this->db->where('harga_terendah <', $hargamax + 1);
        } elseif ($keyword && $f_kategori && $hargamin) {
            $this->db->like('nama_produk', $keyword);  
            $this->db->where('id_kategori', $f_kategori);
            $this->db->where('harga_terendah >', $hargamin - 1);
        } elseif ($keyword && $f_kategori && $hargamax) {
            $this->db->like('nama_produk', $keyword);  
            $this->db->where('id_kategori', $f_kategori);
            $this->db->where('harga_terendah <', $hargamax + 1);
        } elseif ($keyword && $f_kategori) {
            $this->db->like('nama_produk', $keyword);  
            $this->db->where('id_kategori', $f_kategori);
        } elseif ($hargamin && $hargamax) {
            $this->db->where('harga_terendah >', $hargamin - 1);
            $this->db->where('harga_terendah <', $hargamax + 1);
        } elseif ($keyword && $hargamin) {
            $this->db->like('nama_produk', $keyword);
            $this->db->where('harga_terendah >', $hargamin - 1);
        } elseif ($f_kategori && $hargamin) {
            $this->db->where('id_kategori', $f_kategori);
            $this->db->where('harga_terendah >', $hargamin - 1);
        } elseif ($keyword && $hargamax) {
            $this->db->like('nama_produk', $keyword);
            $this->db->where('harga_terendah <', $hargamax + 1);
        } elseif ($f_kategori && $hargamax) {
            $this->db->where('id_kategori', $f_kategori);
            $this->db->where('harga_terendah <', $hargamax + 1);
        } elseif ($hargamin) {
            $this->db->where('harga_terendah >', $hargamin - 1);
        } elseif ($hargamax) {
            $this->db->where('harga_terendah <', $hargamax + 1);
        } elseif ($keyword) {
            $this->db->like('nama_produk', $keyword);
        } elseif ($f_kategori) {
            $this->db->where('id_kategori', $f_kategori);
        }

        $this->db->order_by('id_produk', 'DESC');

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
        $this->no_sku = $post['no_sku'];
        $this->merek = $post['merek'];
        $this->kondisi = $post['kondisi'];
        $this->garansi = $post['garansi'];
        $this->panjang = $post['panjang'];
        $this->lebar = $post['lebar'];
        $this->tinggi = $post['tinggi'];
        $this->berat = $post['berat'];
        $this->deskripsi = $post['deskripsi'];
        $this->harga_terendah = 0;
        $this->id_kategori = $post['id_kategori'];
        $this->gambar = $this->_uploadImage();

        $this->db->insert($this->_tProduk, $this);
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-plus"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menambah data produk</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Menyunting produk
    function updateProduk($id_produk)
    {
        $post = $this->input->post();
        $this->id_produk = $post['id_produk'];
        $this->nama_produk = $post['nama_produk'];
        $this->no_sku = $post['no_sku'];
        $this->merek = $post['merek'];
        $this->kondisi = $post['kondisi'];
        $this->garansi = $post['garansi'];
        $this->panjang = $post['panjang'];
        $this->lebar = $post['lebar'];
        $this->tinggi = $post['tinggi'];
        $this->berat = $post['berat'];
        $this->deskripsi = $post['deskripsi'];
        $this->harga_terendah = 0;
        $this->id_kategori = $post['id_kategori'];

        if (!empty($_FILES["gambar"]["name"])) {
            $this->_deleteImage($post['id_produk']);
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_gambar"];
        }


        $this->db->update($this->_tProduk, $this, array("id_produk" => $id_produk));

        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-pen"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menyunting data produk</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    // Menghapus produk
    function deleteProduk($id_produk)
    {
        $this->_deleteImage($id_produk);
        $this->db->delete($this->_tProduk, array("id_produk" => $id_produk));
        $this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-trash"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menghapus data produk</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
    }

    public function getProdukById($id_produk)
    {
        $this->db->from('tb_produk');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_produk.id_kategori', 'left');
        $this->db->where('id_produk', $id_produk);

        return $this->db->get()->row();
        // return $this->db->get_where($this->db, ['id_produk' => $id_produk])->row();
        // return $this->db->get_where($this->_tProduk, ["id_produk" => $id_produk])->row();
    }

    public function getProdykByPenjual($limit, $start, $id_penjual)
    {
        $this->db->select('tb_produk.id_produk, tb_produk.nama_produk, tb_produk.harga_terendah, tb_produk.gambar');
        $this->db->from('tb_produk');
        $this->db->join('tb_ketersediaan', 'tb_produk.id_produk = tb_ketersediaan.id_produk', 'left');
        $this->db->where('tb_ketersediaan.id_penjual', $id_penjual);
        // $this->db->group_by('tb_produk.id_produk');
        $this->db->limit($limit, $start);   

        return $this->db->get()->result();
    }

    public function getById($id_produk)
    {
        return $this->db->get_where($this->_tProduk, ["id_produk" => $id_produk])->row();
    }

    public function updateHargaTerendah($id_produk,$harga_terendah)
    {
        $this->db->set('harga_terendah', $harga_terendah);
        $this->db->where('id_produk', $id_produk);
        $this->db->update($this->_tProduk);
    }

    private function _deleteImage($id_produk)
    {
        $produk = $this->getById($id_produk);
        if ($produk->gambar != "produk.jpg") {
            $filename = explode(".", $produk->gambar)[0];
            return array_map('unlink', glob(FCPATH . "./img/produk/$filename.*"));
        }
    }

    private function _uploadImage()
    {
        $new_name                       = "produk".time().$_FILES["gambar"]['name'];
        $config['upload_path']          =  './img/produk/';
        $config['allowed_types']        = 'gif|jpg|png|JPG|JPEG';
        $config['max_size']             = 90480;
        $config['overwrite']            = true;
        $config['file_name']            = $new_name;
        // 10MB
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        
        return "produk.jpg";
    }
}
