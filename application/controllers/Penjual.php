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
		$data['provinsi'] = $this->M_Penjual->getProvinsi();
		// echo '<pre>',var_dump($data),'</pre>';
		// exit();

		// ambil keyword
		if ($this->input->post('cari')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama_penjual', $data['keyword']);
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

		$data['penjual'] = $this->M_Penjual->getAllPenjualProduk($config['per_page'], $data['start'], $data['keyword']);
		// echo '<pre>',var_dump($data),'</pre>';
		// exit();
		$this->load->view('pages/penjual', $data);
	}

	public function etalase()
	{
		$this->load->view('pages/etalase_penjual');
	}

	public function tambah()
	{
		$this->load->view('pages/tambah_penjual');
	}

	public function sunting()
	{
		$this->load->view('pages/sunting_penjual');
	}

}
