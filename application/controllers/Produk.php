<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->helper('url');
        $this->load->helper('array');

		$this->load->library('pagination');
        $this->load->helper(array('form', 'url'));
		
		$this->load->model('M_Produk');
		$this->load->model('M_Kategori');
		$this->load->model('M_Ketersediaan');
		$this->load->model('M_Penjual');

	}

	public function index()
	{
		// Kategori
		$data['kategori'] = $this->M_Kategori->getAllKategori();

		// ambil keyword
		if ($this->input->post('cari')) {
			$data['keyword'] = $this->input->post('keyword');
			$data['f_kategori'] = $this->input->post('f_kategori');
			$data['hargamin'] = $this->input->post('hargamin');
			$data['hargamax'] = $this->input->post('hargamax');
			$this->session->set_userdata('keyword', $data['keyword']);
			$this->session->set_userdata('f_kategori', $data['f_kategori']);
			$this->session->set_userdata('hargamin', $data['hargamin']);
			$this->session->set_userdata('hargamax', $data['hargamax']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
			$data['f_kategori'] = $this->session->userdata('f_kategori');
			$data['hargamin'] = $this->session->userdata('hargamin');
			$data['hargamax'] = $this->session->userdata('hargamax');
		}

		// $this->db->like('nama_produk', $data['keyword']);
		// $this->db->where('id_produk', $data['f_kategori']);
		// $this->db->where('harga_terendah >', $data['hargamin']);	
		// $this->db->where('harga_terendah <', $data['hargamax']);
		$this->db->from('tb_produk');

		// config
		$config['base_url'] = 'http://localhost/siproduk/produk/index';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 20;
		$data['total_rows'] = $config['total_rows'];
		$data['per_page'] = $config['per_page'];

		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['produk'] = $this->M_Produk->getProduk($config['per_page'], $data['start'], $data['keyword'], $data['f_kategori'], $data['hargamin'], $data['hargamax']);
		$this->load->view('pages/produk',$data);
	
	}

	public function detail($id_produk = null)
	{
		if(is_null($id_produk)){
			redirect(base_url('produk'));
		} else {
			// ambil data penjual dan ketersediaan
			$data['ketersediaan'] = $this->M_Ketersediaan->getKetersediaanByProdukId($id_produk);

			// ambil data produk sesuai id_produk
			$data['produk'] = $this->M_Produk->getProdukById($id_produk);
			// echo '<pre>',print_r($data),'</pre>';
			$this->load->view('pages/detail_produk', $data);
		}
	}

	public function tambah()
	{
		if ($this->input->post('submit')) {
			echo "<pre>",var_dump($_POST, $_FILES),"</pre>";
			exit();
            $this->M_Produk->addProduk();
            redirect('produk');
        }

		// Kategori
		$data['kategori'] = $this->M_Kategori->getAllKategori();

		$this->load->view('pages/tambah_produk', $data);
	}

	public function sunting($id_produk = null)
	{
		if ($this->input->post('submit')) {
			// echo "<pre>",var_dump($_POST, $_FILES),"</pre>";
			// exit();
            $this->M_Produk->updateProduk($this->input->post('id_produk'));
            redirect('produk/detail/'.$this->input->post('id_produk'));
		}
		
		// Cek apakah terdapat id produk
		if (is_null($id_produk)) {
			// alihkan ke halaman produk ketika tidak terdapat id produk
			redirect(base_url('produk'));
		} else {
			// ambil data Kategori
			$data['kategori'] = $this->M_Kategori->getAllKategori();

			// ambil data Produk sesuai id produk
			$data['produk'] = $this->M_Produk->getProdukById($id_produk);
			$this->load->view('pages/sunting_produk', $data);
		}
	}

	public function hapus($id_produk)
	{
		// Cek id_produk
		if(is_null($id_produk)) {
			$this->session->set_flashdata('message', '<div class="card-notif notif-danger" id="notif"><div class="notif-icon"><i class="fas fa-exclamation-triangle"></i></div><div class="notif-body"><div class="notif-title">Galat !</div><small>Produk tidak ditemukan</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');

			// alihkan ke halaman produk
			redirect(base_url('produk'));
		} else {
			// echo $id_produk;
			// exit();

			// hapus ketersediaan sesuai id_produk
			$this->M_Ketersediaan->delKetersediaanByProdukID($id_produk);

			// hapus produk
			$this->M_Produk->deleteProduk($id_produk);
			// Notif
			$this->session->set_flashdata('message', '<div class="card-notif notif-success" id="notif"><div class="notif-icon"><i class="fas fa-trash"></i></div><div class="notif-body"><div class="notif-title">Berhasil !</div><small>Berhasil menghapus data produk</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
			redirect(base_url('produk'));
		}
	}

	public function tambah_ketersediaan($id_produk = null)
	{
		if ($this->input->post('submit')) {
			// print_r($this->input->post('id_penjual'));
			// echo $this->input->post('id_penjual');
			// echo '<pre>',var_dump($this->input->post()),'</pre>';
			// exit();

			if($this->input->post('id_penjual') == "") {
				$this->session->set_flashdata('message', '<div class="card-notif notif-danger" id="notif"><div class="notif-icon"><i class="fas fa-plus"></i></div><div class="notif-body"><div class="notif-title">Gagal !</div><small>Gagal menambah data id penjual kosong</small></div><button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button></div>');
				redirect('produk/tambah_ketersediaan/'.$this->input->post('id_produk'));
			}
			
			$this->M_Ketersediaan->addKetersediaan($id_produk);

			// dapatkan harga teredah
			$data['ketersediaan'] = $this->M_Ketersediaan->selectHargaMin($this->input->post('id_produk'));
			// $harga_terendah = $this->M_Ketersediaan->selectHargaMin($this->input->post('id_produk'));
			$harga = $data['ketersediaan']->harga_satuan;

			// echo $harga_terendah;
			// echo $harga_terendah->harga_terendah;
			// echo '<pre>',print_r($data),'</pre>';
			// echo $harga;
			// echo '<pre>',print_r($harga_terendah),'</pre>';
			// exit();

            $this->M_Produk->updateHargaTerendah($this->input->post('id_produk'),$harga);
            redirect('produk/detail/'.$this->input->post('id_produk'));
		}
		
		// Cek apakah terdapat id produk
		if (is_null($id_produk)) {
			// alihkan ke halaman produk ketika tidak terdapat id produk
			redirect(base_url('produk'));
		} else {
			// ambil data Penjual
			$data['penjual'] = $this->M_Penjual->getAllPenjual();
			
			// ambil id_produk
			$data['produk'] = $this->M_Produk->getById($id_produk);

			$this->load->view('pages/tambah_ketersediaan', $data);
		}
	}

	public function sunting_ketersediaan($id_ketersediaan = null)
	{
		if ($this->input->post('submit')) {

			// echo $id_ketersediaan;
			// echo '<pre>',print_r($this->input->post()),'</pre>';
			// exit();

			// Sunting Ketersediaan
			$this->M_Ketersediaan->editKetersediaan($this->input->post('id_ketersediaan'));

			// dapatkan harga teredah
			$data['ketersediaan'] = $this->M_Ketersediaan->selectHargaMin($this->input->post('id_produk'));
			$harga = $data['ketersediaan']->harga_satuan;

			// Update Harga Terendah
            $this->M_Produk->updateHargaTerendah($this->input->post('id_produk'),$harga);
            redirect('produk/detail/'.$this->input->post('id_produk'));
		}

		// Cek apakah terdapat id ketersediaan
		if (is_null($id_ketersediaan)) {
			// alihkan ke halaman produk ketika tidak terdapat id ketersediaan
			redirect(base_url('produk'));
		} else {
			// ambil data Penjual
			$data['penjual'] = $this->M_Penjual->getAllPenjual();
			
			// ambil id_ketersediaan
			$data['ketersediaan'] = $this->M_Ketersediaan->getById($id_ketersediaan);

			$this->load->view('pages/sunting_ketersediaan', $data);
		}
	}

	public function hapus_ketersediaan($id_ketersediaan = null)
	{
		// Cek id_ketersediaan
		if (is_null($id_ketersediaan)) {
			// alihkan ke halaman produk ketika tidak terdapat id ketersediaan
			redirect(base_url('produk'));
		} else {
			// ambil  ketersediaan spesifik
			$data['ketersediaan'] = $this->M_Ketersediaan->getById($id_ketersediaan);
			// tampung di variabel
			$id_ketersediaan = $data['ketersediaan']->id_ketersediaan;
			$id_produk = $data['ketersediaan']->id_produk;

			// hapus ketersediaan
			$this->M_Ketersediaan->delKetersediaan($id_ketersediaan);

			// dapatkan harga teredah
			$data['ketersediaan'] = $this->M_Ketersediaan->selectHargaMin($id_produk);
			$harga = $data['ketersediaan']->harga_satuan;

			// echo $id_ketersediaan;
			// echo "<br>";
			// echo $id_produk;
			// echo "<br>";
			// echo $harga;
			// exit();

			// update harga terendah
            $this->M_Produk->updateHargaTerendah($id_produk, $harga);
            redirect('produk/detail/'.$id_produk);

		}
	}
}
