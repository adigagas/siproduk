<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

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
		// ambil nama provinsi
		$data['lokasi'] = $this->M_Penjual->getProvinsi();
		// echo '<pre>',var_dump($data),'</pre>';
		// exit();

		// ambil keyword
		if ($this->input->post('cari')) {
			$data['keyword'] = $this->input->post('keyword');
			$data['provinsi'] = $this->input->post('provinsi');
			$this->session->set_userdata('keyword', $data['keyword']);
			$this->session->set_userdata('provinsi', $data['provinsi']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
			$data['provinsi'] = $this->session->userdata('provinsi');
		}

		$this->db->like('nama_penjual', $data['keyword']);
		$this->db->like('provinsi', $data['provinsi']);
		$this->db->from('tb_penjual');

		// config
		$config['base_url'] = 'http://localhost/siproduk/penjual/index';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 10;
		$data['total_rows'] = $config['total_rows'];
		$data['per_page'] = $config['per_page'];

		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['penjual'] = $this->M_Penjual->getAllPenjualProduk($config['per_page'], $data['start'], $data['keyword'], $data['provinsi']);
		// echo '<pre>',var_dump($data),'</pre>';
		// exit();
		$this->load->view('pages/penjual', $data);
	}

	public function etalase($id_penjual = null)
	{
		// echo '<pre>',var_dump($id_penjual),'</pre>';
		// exit();

		// cek id_penjual
		if(is_null($id_penjual)){
			redirect(base_url('penjual'));
		} else {
			// ambil data penjual
			$data['penjual'] = $this->M_Penjual->getByID($id_penjual);

			// ambil id_penjual
			// $id_penjual = $data['penjual']->id_penjual;

			// Pagination
			// data produk
			$this->db->select('tb_produk.id_produk, tb_produk.nama_produk, tb_produk.harga_terendah, tb_produk.gambar');
			$this->db->from('tb_produk');
			$this->db->join('tb_ketersediaan', 'tb_produk.id_produk = tb_ketersediaan.id_produk', 'left');
			$this->db->where('tb_ketersediaan.id_penjual', $id_penjual);

			// config
			$config['base_url'] = 'http://localhost/siproduk/penjual/etalase/'.$id_penjual.'/index';
			$config['total_rows'] = $this->db->count_all_results();
			$config['per_page'] = 20;
			$data['total_rows'] = $config['total_rows'];
			$data['per_page'] = $config['per_page'];

			// initialize
			$this->pagination->initialize($config);

			$data['start'] = $this->uri->segment(5);

			// ambil data produk
			$data['produk'] = $this->M_Produk->getProdykByPenjual($config['per_page'], $data['start'], $id_penjual);
			// echo '<pre>',var_dump($data),'</pre>';
			// echo $id_penjual;
			// exit();
			$this->load->view('pages/etalase_penjual', $data);
		}
	}

	public function tambah()
	{
		if ($this->input->post('submit')) {
            $this->M_Penjual->addPenjual();
            redirect('penjual');
		}
		
		$this->load->view('pages/tambah_penjual');
	}

	public function sunting()
	{
		$this->load->view('pages/sunting_penjual');
	}

}
