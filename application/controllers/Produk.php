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

	}

	public function index()
	{
		// Kategori
		$data['kategori'] = $this->M_Kategori->getAllKategori();

		// ambil keyword
		if ($this->input->post('cari')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama_produk', $data['keyword']);
		$this->db->from('tb_produk');

		// config
		$config['base_url'] = 'http://localhost/siproduk/kategori/index';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 10;
		$data['total_rows'] = $config['total_rows'];
		$data['per_page'] = $config['per_page'];

		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['produk'] = $this->M_Produk->getProduk($config['per_page'], $data['start'], $data['keyword']);
		$this->load->view('pages/produk',$data);
	
	}

	public function detail()
	{
		$this->load->view('pages/detail_produk');
	}

	public function tambah()
	{
		$this->load->view('pages/tambah_produk');
	}

	public function sunting()
	{
		$this->load->view('pages/sunting_produk');
	}

	public function tambah_ketersediaan()
	{
		$this->load->view('pages/tambah_ketersediaan');
	}

	public function sunting_ketersediaan()
	{
		$this->load->view('pages/sunting_ketersediaan');
	}
}
