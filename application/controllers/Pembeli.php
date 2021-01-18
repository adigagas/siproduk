<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller {

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
		
		$this->load->model('M_Pembeli');
	}

	public function index()
	{
		// tambah
		if ($this->input->post('tambah')) {
			date_default_timezone_set('Asia/Jakarta');
			$id_pembeli = "CUST".date("Ymdhis");
			// echo $id_pembeli;
			// exit();
			$this->M_Pembeli->addPembeli($id_pembeli);
			redirect('pembeli');
		}

		// sunting
		if ($this->input->post('sunting')) {
			$this->M_Pembeli->updatePembeli($this->input->post('id_pembeli'));
			redirect('pembeli');
		}

		// hapus
		if ($this->input->post('hapus')) {
			$this->M_Pembeli->deletePembeli($this->input->post('id_pembeli'));
			redirect('pembeli');
		}

		// ambil keyword
		if ($this->input->post('cari')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama_pembeli', $data['keyword']);
		$this->db->from('tb_pembeli');

		// config
		$config['base_url'] = 'http://localhost/siproduk/pembeli/index';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 10;
		$data['total_rows'] = $config['total_rows'];
		$data['per_page'] = $config['per_page'];

		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['pembeli'] = $this->M_Pembeli->getPembeli($config['per_page'], $data['start'], $data['keyword']);
		$this->load->view('pages/pembeli',$data);
	}

}
