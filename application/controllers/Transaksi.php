<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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
		$this->load->view('pages/transaksi');
	}

	public function detail()
	{
		$this->load->view('pages/detail_transaksi');
	}

	public function tambah()
	{
		$this->load->view('pages/tambah_transaksi');
	}

	public function sunting()
	{
		$this->load->view('pages/sunting_transaksi');
	}

	public function tambah_pesanan()
	{
		$this->load->view('pages/tambah_pesanan');
	}

	public function sunting_pesanan()
	{
		$this->load->view('pages/sunting_pesanan');
	}

	public function kuitansi()
	{
		$this->load->view('pages/kuitansi');
	}

	public function invoice()
	{
		$this->load->view('pages/invoice');
	}

	public function print_kuitansi()
	{
		$this->load->view('pages/print_kuitansi');
	}

	public function print_invoice()
	{
		$this->load->view('pages/print_invoice');
	}

}
