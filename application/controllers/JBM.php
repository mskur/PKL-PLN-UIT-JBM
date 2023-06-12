<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JBM extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Admin');
	}

	public function index()
	{
		$queryMedia = $this->M_Admin->getMedia();
		$queryKontak = $this->M_Admin->getKontakDetail(1);
		$queryLightbox = $this->M_Admin->getLightBoxDetail(1);
		$queryAplikasi = $this->M_Admin->getAplikasi();
		//$query = $this->M_UPT->getAdmin();
		$data = array(
			'media' => $queryMedia,
			'kontak' => $queryKontak,
			'lightbox' => $queryLightbox,
			'title' => 'Home',
			'aplikasi' => $queryAplikasi

		);

		$this->template->render('V_JBM_Home',$data);

	}

    public function aplikasiJBM()
    {
		$queryAplikasi = $this->M_Admin->getAplikasi();
		$data = array(
			'aplikasi' => $queryAplikasi,
			'title' => 'Aplikasi'
		);
        $this->template->render('V_JBM_Aplikasi', $data);
    }

	public function mediaJBM()
	{
		$queryMedia = $this->M_Admin->getMedia();
		$data = array(
			'media' => $queryMedia,
			'title' => 'Media'
		);
		$this->template->render('V_JBM_Media', $data);
	}

	public function viewMediaDetail(){
		$idMedia = $this->input->post('idMedia');
		$mediaDetail = $this->M_Admin->getMediaDetail($idMedia);
		$data = array(
			'media' => $mediaDetail,
			'title' => 'View'
		);
		$this->template->render('V_JBM_detailMedia', $data);

	}

	public function kontakJBM()
	{
		$queryKontak = $this->M_Admin->getKontakDetail(1);
		$data = array(
			'kontak' => $queryKontak,
			'title' => 'Contact'
		);
		$this->template->render('V_JBM_Kontak', $data);
	}

	public function login()
	{
		$this->load->view('V_JBM_Login');
	}
}
