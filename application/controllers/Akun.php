<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

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
		
		$this->load->model('M_Akun');
	}

	public function index()
	{
		// ambil keyword
		if ($this->input->post('cari')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('nama_user', $data['keyword']);
		$this->db->from('tb_user');

		// config
		$config['base_url'] = 'http://localhost/siproduk/akun/index';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 10;
		$data['total_rows'] = $config['total_rows'];
		$data['per_page'] = $config['per_page'];

		// initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['akun'] = $this->M_Akun->getAkun($config['per_page'], $data['start'], $data['keyword']);
		$this->load->view('pages/akun',$data);
	}

	public function detail()
	{
		$this->load->view('pages/detail_akun');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
			'matches' => 'Password dont match!', 
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('nama_user', 'Nama', 'required|trim');
		
		if ($this->form_validation->run() == false) {
			$this->load->view('pages/tambah_akun');
		} else {
			$this->M_Akun->addAkun();
			redirect('akun');
			
			$this->load->view('pages/akun');
		}	
	}

	public function sunting()
	{
		if ($this->input->post('submit')) {
            $this->M_Akun->updateAkun($this->input->post('id_user'));
            redirect('akun/sunting/'.$this->input->post('id_user'));
		}
		
		// Cek apakah terdapat id user
		if (is_null($id_user)) {
			// alihkan ke halaman akun ketika tidak terdapat id user
			redirect(base_url('akun'));
		} else {
			// ambil data user sesuai id user
			$data['akun'] = $this->M_Akun->getProdukById($id_user);
			$this->load->view('pages/sunting_akun', $data);
		}
	}

}
