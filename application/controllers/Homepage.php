<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('Model_website');
	}

	public function index()
	{

		$data['judul']		= 'PT.Prima Mixindo Utama'; 
		$data['sliderhome'] = $this->Model_website->getSliderHome();
		$data['keunggulan']	= $this->Model_website->getKeunggulan();
		$data['profile']	= $this->Model_website->getProfile();
		$data['reputasi']	= $this->Model_website->getReputasi();
		$data['testimoni']	= $this->Model_website->getDataLimit('testimoni', 3, 'DESC');
		$data['pegawai']	= $this->Model_website->getPegawai();
		$data['pricing']	= $this->Model_website->getDataLimit('pricing', 3);


		$this->load->view('website/header', $data);
		$this->load->view('website/homepage', $data);
		$this->load->view('website/footer');
	}
}
