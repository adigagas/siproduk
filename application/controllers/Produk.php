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
			$this->session->set_userdata('keyword', $data['keyword']);
			$this->session->set_userdata('f_kategori', $data['f_kategori']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
			$data['f_kategori'] = $this->session->userdata('f_kategori');
		}

		$this->db->like('nama_produk', $data['keyword']);
		$this->db->like('id_produk', $data['f_kategori']);
		$this->db->from('tb_produk');

		// config
		$config['base_url'] = 'http://localhost/siproduk/kategori/index';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 20;
		$data['total_rows'] = $config['total_rows'];
		$data['per_page'] = $config['per_page'];

		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['produk'] = $this->M_Produk->getProduk($config['per_page'], $data['start'], $data['keyword'], $data['f_kategori']);
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

	public function tambah_ketersediaan($id_produk = null)
	{
		if ($this->input->post('submit')) {
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

	public function sunting_ketersediaan()
	{
		$this->load->view('pages/sunting_ketersediaan');
	}
}
