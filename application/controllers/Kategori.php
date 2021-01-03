<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
		
		$this->load->model('M_Kategori');
	}

	public function index()
	{
		// tambah
		if ($this->input->post('tambah')) {
			$this->M_Kategori->addKategori();
			redirect('kategori');
		}

		// sunting
		if ($this->input->post('sunting')) {
			$this->M_Kategori->updateKategori($this->input->post('id_kategori'));
			redirect('kategori');
		}

		// hapus
		if ($this->input->post('hapus')) {
			$this->M_Kategori->deleteKategori($this->input->post('id_kategori'));
			redirect('kategori');
		}

		// ambil keyword
		if ($this->input->post('cari')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama_kategori', $data['keyword']);
		$this->db->from('tb_kategori');

		// config
		$config['base_url'] = 'http://localhost/siproduk/kategori/index';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 10;
		$data['total_rows'] = $config['total_rows'];
		$data['per_page'] = $config['per_page'];

		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['kategori'] = $this->M_Kategori->getKategori($config['per_page'], $data['start'], $data['keyword']);
		$this->load->view('pages/kategori',$data);
	}

}
