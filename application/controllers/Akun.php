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
        // $this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('pages/akun');
	}

	public function detail()
	{
		$this->load->view('pages/detail_akun');
	}

	public function tambah()
	{
		$this->load->view('pages/tambah_akun');
	}

	public function sunting()
	{
		$this->load->view('pages/sunting_akun');
	}

}
