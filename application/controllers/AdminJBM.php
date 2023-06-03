<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminJBM extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login');
		$this->load->model('M_Admin');
		$this->load->library('form_validation');
	}

	public function login()
	{
		$this->load->view('V_JBM_Login');
	}

	public function loginAdmin()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->template->render('V_JBM_Login');
		} 
		else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$this->M_Login->getLogin($username, $password);
		}
	}

	public function dashboard()
	{
		$this->M_Login->protectLogin();
		$countAplikasi = count($this->M_Admin->getAplikasi());
		$countMedia = count($this->M_Admin->getMedia());
		$countAdmin = count($this->M_Admin->getAdmin());
		$query = $this->M_Admin->getMedia();
		$test = $this->M_Admin->getAplikasi();
		$query1 = $this->M_Admin->getLightBoxDetail(1);

		$data = array(
			'countAplikasi' => $countAplikasi,
			'countMedia' => $countMedia,
			'countAdmin' => $countAdmin,
			'media' => $query,
			'aplikasi' => $test,
			'lightbox' => $query1
		);
		$this->load->view('admin/V_JBM_Dashboard', $data);
	}

	public function logoutAdmin()
	{
		$this->M_Login->protectLogin();
		$this->session->set_userdata('username', FALSE);
		$this->session->sess_destroy();
		redirect('JBM');
	}

	//====================================================================================================

	public function viewKontak()
	{
		$this->M_Login->protectLogin();
		$query = $this->M_Admin->getKontakDetail(1);
		$data = array(
			'kontak' => $query
		);
		$this->load->view('admin/V_JBM_Kontak', $data);
	}

	public function updateKontakAction()
	{
		$this->M_Login->protectLogin();
		$this->form_validation->set_rules('web', 'Web', 'required|trim', 
			array(
				'required' => 'Web harus diisi'
			)
		);
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|trim', 
			array(
				'required' => 'Telepon harus diisi'
			)
		);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', 
			array(
				'required' => 'Alamat harus diisi'
			)
		);
		if ($this->form_validation->run() == FALSE) {
			$query = $this->M_Admin->getKontakDetail(1);
			$data = array(
				'kontak' => $query
			);
			$this->load->view('admin/V_JBM_Kontak', $data);
		} 
		else {
			$web = $this->input->post('web');
			$telepon = $this->input->post('telepon');
			$alamat = $this->input->post('alamat');

			$arrayUpdate = array(
				'web' => $web,
				'telepon' => $telepon,
				'alamat' => $alamat
			);

			$this->M_Admin->updateKontak(1, $arrayUpdate);
			redirect(base_url('AdminJBM/viewKontak'));
		}
	}

	public function viewAplikasi()
	{
		$this->M_Login->protectLogin();
		$query = $this->M_Admin->getAplikasi();
		$data = array(
			'aplikasi' => $query
		);
		$this->load->view('admin/V_JBM_Aplikasi', $data);
	}

	public function addAplikasi()
	{
		$this->M_Login->protectLogin();
		$this->load->view('admin/V_JBM_addAplikasi');
	}

	public function addAplikasiAction()
	{
		$this->M_Login->protectLogin();
		$this->form_validation->set_rules('namaAplikasi', 'Nama Aplikasi', 'required|trim', 
			array(
				'required' => 'Nama Aplikasi harus diisi'
			)
		);
		$this->form_validation->set_rules('alamatAplikasi', 'Alamat Aplikasi', 'required|trim', 
			array(
				'required' => 'Alamat Aplikasi harus diisi'
			)
		);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/V_JBM_addAplikasi');
		} 
		else {
			$namaAplikasi = $this->input->post('namaAplikasi');
			$alamatAplikasi = $this->input->post('alamatAplikasi');

			$arrayInsert = array(
				'namaAplikasi' => $namaAplikasi,
				'alamatAplikasi' => $alamatAplikasi
			);

			$this->M_Admin->addAplikasi($arrayInsert);
			redirect(base_url('AdminJBM/viewAplikasi'));
		}
	}

	public function updateAplikasi()
	{
		$this->M_Login->protectLogin();
		$idAplikasiUPDATE = $this->input->post('idAplikasiUPDATE');
		if ($idAplikasiUPDATE == NULL) {
			redirect(base_url('AdminJBM/viewAplikasi'));
		}

		$query = $this->M_Admin->getAplikasiDetail($idAplikasiUPDATE);
		$data = array(
			'aplikasi' => $query
		);
		$this->load->view('admin/V_JBM_updateAplikasi', $data);
	}

	public function updateAplikasiAction()
	{
		$this->M_Login->protectLogin();
		if($this->input->post('submit') == NULL){
			redirect(base_url('AdminJBM/viewAplikasi'));
		}

		$this->form_validation->set_rules('namaAplikasi', 'Nama Aplikasi', 'required|trim', 
			array(
				'required' => 'Nama Aplikasi harus diisi'
			)
		);
		$this->form_validation->set_rules('alamatAplikasi', 'Alamat Aplikasi', 'required|trim', 
			array(
				'required' => 'Alamat Aplikasi harus diisi'
			)
		);
		if ($this->form_validation->run() == FALSE) {
			$idAplikasi = $this->input->post('idAplikasi');
			$query = $this->M_Admin->getAplikasiDetail($idAplikasi);
			$data = array(
				'aplikasi' => $query
			);
			$this->load->view('admin/V_JBM_updateAplikasi', $data);
		} 
		else {
			$idAplikasi = $this->input->post('idAplikasi');
			$namaAplikasi = $this->input->post('namaAplikasi');
			$alamatAplikasi = $this->input->post('alamatAplikasi');

			$arrayUpdate = array(
				'namaAplikasi' => $namaAplikasi,
				'alamatAplikasi' => $alamatAplikasi
			);

			$this->M_Admin->updateAplikasi($idAplikasi, $arrayUpdate);
			redirect(base_url('AdminJBM/viewAplikasi'));
		}
	}

	public function deleteAplikasi()
	{
		$this->M_Login->protectLogin();
		$idAplikasiDELETE = $this->input->post('idAplikasiDELETE');
		if ($idAplikasiDELETE == NULL) {
			redirect(base_url('AdminJBM/viewAplikasi'));
		}

		$this->M_Admin->deleteAplikasi($idAplikasiDELETE);
		redirect(base_url('AdminJBM/viewAplikasi'));
	}

	//MEDIA
	public function viewMedia()
	{
		$this->M_Login->protectLogin();
		$query = $this->M_Admin->getMedia();
		$data = array(
			'media' => $query,
			'error' => NULL
		);
		$this->load->view('admin/V_JBM_Media', $data);
	}

	public function addMedia()
	{
		$this->M_Login->protectLogin();
		$data = array(
			'error' => NULL
		);
		$this->load->view('admin/V_JBM_addMedia', $data);
	}

	//insert with image with generate random name file
	public function addMediaAction()
	{
		$this->M_Login->protectLogin();
		$this->form_validation->set_rules('username', 'Username', 'required|trim', 
			array(
				'required' => 'Username harus diisi'
			)
		);
		$this->form_validation->set_rules('judulMedia', 'Judul Media', 'required|trim', 
			array(
				'required' => 'Judul Media harus diisi'
			)
		);
		$this->form_validation->set_rules('teksMedia', 'Teks Media', 'required|trim', 
			array(
				'required' => 'Teks Media harus diisi'
			)
		);
		if ($this->form_validation->run() == FALSE) {
			$this->M_Login->protectLogin();
			$data = array(
				'error' => NULL
			);
			$this->load->view('admin/V_JBM_addMedia', $data);
		} else {
			$username = $this->input->post('username');
			$judulMedia = $this->input->post('judulMedia');
			$teksMedia = $this->input->post('teksMedia');

			$config['upload_path'] = './uploads/media';
			$config['allowed_types'] = 'jpg|png|jpeg';
			//$config['max_size'] = 2048;
			$config['file_name'] = 'media' . time();

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambarMedia')) {
				$gambarMedia = $this->upload->data('file_name');
				$arrayInsert = array(
					'username' => $username,
					'judulMedia' => $judulMedia,
					'teksMedia' => $teksMedia,
					'gambarMedia' => $gambarMedia
				);

				$this->M_Admin->addMedia($arrayInsert);
				redirect(base_url('AdminJBM/viewMedia'));
			} else {
				$error = $this->upload->display_errors();
				//back to form with error
				$data = array(
					'error' => $error
				);
				$this->load->view('admin/V_JBM_addMedia', $data);
			}
		}
	}

	public function updateMedia()
	{
		$this->M_Login->protectLogin();
		$idMediaUPDATE = $this->input->post('idMediaUPDATE');
		if ($idMediaUPDATE == NULL) {
			redirect(base_url('AdminJBM/viewMedia'));
		}

		$query = $this->M_Admin->getMediaDetail($idMediaUPDATE);
		$data = array(
			'media' => $query,
			'error' => NULL
		);
		$this->load->view('admin/V_JBM_updateMedia', $data);
	}

	public function updateMediaAction()
	{
		$this->M_Login->protectLogin();
		$idMedia = $this->input->post('idMedia');
		if($this->input->post('submit') == NULL){
			redirect(base_url('AdminJBM/viewAplikasi'));
		}

		$this->form_validation->set_rules('judulMedia', 'Judul Media', 'required|trim', 
			array(
				'required' => 'Judul Media harus diisi'
			)
		);
		$this->form_validation->set_rules('teksMedia', 'Teks Media', 'required|trim', 
			array(
				'required' => 'Teks Media harus diisi'
			)
		);
		$gambarMediaLama = $this->input->post('gambarMediaLama');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->M_Admin->getMediaDetail($idMedia);
			$data = array(
				'media' => $query,
				'error' => NULL
			);
			$this->load->view('admin/V_JBM_updateMedia', $data);
		} 
		else {
			$idMedia = $this->input->post('idMedia');
			$judulMedia = $this->input->post('judulMedia');
			$teksMedia = $this->input->post('teksMedia');

			$config['upload_path'] = './uploads/media';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name'] = 'media' . time();

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambarMedia')) {
				$gambarMedia = $this->upload->data('file_name');
				$arrayUpdate = array(
					'judulMedia' => $judulMedia,
					'teksMedia' => $teksMedia,
					'gambarMedia' => $gambarMedia
				);

				//delete file old
				$query = $this->M_Admin->getMediaDetail($idMedia);
				$gambarMediaOld = $query->gambarMedia;
				$path = './uploads/media/' . $gambarMediaOld;
				unlink($path);

				$this->M_Admin->updateMedia($idMedia, $arrayUpdate);
				redirect(base_url('AdminJBM/viewMedia'));
			} 

			//else if no update image
			else if (!$this->upload->do_upload('gambarMedia')) {
				$arrayUpdate = array(
					'judulMedia' => $judulMedia,
					'teksMedia' => $teksMedia
				);

				$this->M_Admin->updateMedia($idMedia, $arrayUpdate);
				redirect(base_url('AdminJBM/viewMedia'));
			}

			else {
				$error = $this->upload->display_errors();
				//back to update page
				$query = $this->M_Admin->getMediaDetail($idMedia);
				$data = array(
					'media' => $query,
					'error' => $error
				);
				$this->load->view('admin/V_JBM_updateMedia', $data);
			}
		}
	}

	public function deleteMedia()
	{
		$this->M_Login->protectLogin();
		$idMediaDELETE = $this->input->post('idMediaDELETE');
		if ($idMediaDELETE == NULL) {
			redirect(base_url('AdminJBM/viewMedia'));
		}

		//delete file from folder
		$query = $this->M_Admin->getMediaDetail($idMediaDELETE);
		$gambarMedia = $query->gambarMedia;
		$path = './uploads/media/' . $gambarMedia;
		unlink($path);
		//delete from database
		$this->M_Admin->deleteMedia($idMediaDELETE);
		redirect(base_url('AdminJBM/viewMedia'));
	}

	//-=============================================================================
	public function lightBox()
	{
		$this->M_Login->protectLogin();
		$query = $this->M_Admin->getLightBoxDetail(1);
		$data = array(
			'lightbox' => $query,
			'error' => NULL
		);
		$this->load->view('admin/V_JBM_updateLightBox', $data);
	}

	public function updateLightBoxAction()
	{
		$this->M_Login->protectLogin();
		$idLightBox = $this->input->post('idLightBox');
		$gambarLama = $this->input->post('gambarLama');

		$config['upload_path'] = './uploads/lightbox/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = 'lightbox' . time();

		$this->load->library('upload', $config);

		//if update image
		if ($this->upload->do_upload('gambarLightBox')) {
			$gambarLightBox = $this->upload->data('file_name');
			$arrayUpdate = array(
				'gambarLightBox' => $gambarLightBox
			);

			//delete file old
			$path = './uploads/lightbox/' . $gambarLama;
			unlink($path);

			$this->M_Admin->updateLightBox(1, $arrayUpdate);
			redirect(base_url('AdminJBM/lightBox'));
		}
		else if (!$this->upload->do_upload('gambarLightBox')) {
			redirect(base_url('AdminJBM/lightBox'));
		}
		else {
			$error = $this->upload->display_errors();
			//back to update page
			$query = $this->M_Admin->getLightBoxDetail(1);
			$data = array(
				'lightbox' => $query,
				'error' => $error
			);
			$this->load->view('admin/V_JBM_updateLightBox', $data);
		}
	}

	//====================================================================================================
	public function viewAdmin()
	{
		$this->M_Login->protectLogin();
		$query = $this->M_Admin->getAdmin();
		$data = array(
			'admin' => $query
		);
		$this->load->view('admin/V_JBM_viewAdmin', $data);
	}

	public function addAdmin()
	{
		$this->M_Login->protectLogin();
		//if not super admin, redirect to dashboard
		if ($this->session->userdata('level') != 'superadmin') {
			redirect(base_url('AdminJBM/dashboard'));
		}
		$this->load->view('admin/V_JBM_addAdmin');
	}

	public function addAdminAction()
	{
		$this->M_Login->protectLogin();
		if ($this->session->userdata('level') != 'superadmin') {
			redirect(base_url('AdminJBM/dashboard'));
		}
		$username = $this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]', 
			array(
				'required' => 'Username harus diisi',
				'is_unique' => 'Username sudah ada'
			)
		);
		$password = $this->form_validation->set_rules('password', 'Password', 'required', 
			array(
				'required' => 'Password harus diisi'
			)
		);
		$level = $this->form_validation->set_rules('level', 'Level', 'required', 
			array(
				'required' => 'Level harus diisi'
			)
		);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/V_JBM_addAdmin');
		} 
		else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$level = $this->input->post('level');

			$arrayInsert = array(
				'username' => $username,
				'password' => $password,
				'level' => $level
			);

			$this->M_Admin->addAdmin($arrayInsert);
			redirect(base_url('AdminJBM/viewAdmin'));
		}
	}

	public function updateAdmin()
	{
		$this->M_Login->protectLogin();
		$usernameUPDATE = $this->input->post('usernameUPDATE');
		if ($this->session->userdata('level') != 'superadmin') {
			redirect(base_url('AdminJBM/dashboard'));
		}

		if($usernameUPDATE == NULL){
			redirect(base_url('AdminJBM/viewAdmin'));
		}

		//admin tidak bisa update dirinya sendiri
		if ($usernameUPDATE == $this->session->userdata('username')) {
			redirect(base_url('AdminJBM/viewAdmin'));
		}

		$query = $this->M_Admin->getAdminDetail($usernameUPDATE);
		$data = array(
			'admin' => $query
		);
		$this->load->view('admin/V_JBM_updateAdmin', $data);
	}

	public function updateAdminAction()
	{
		$this->M_Login->protectLogin();
		if ($this->session->userdata('level') != 'superadmin') {
			redirect(base_url('AdminJBM/dashboard'));
		}

		if($this->input->post('submit') == NULL){
			redirect(base_url('AdminJBM/viewAdmin'));
		}

		$username = $this->input->post('username');
		
		$level = $this->input->post('level');

		//get old password
		$oldPassword = $this->input->post('oldPassword');

		//if not change password
		if ($this->input->post('password') == '') {
			$arrayUpdate = array(
				'password' => $oldPassword,
				'level' => $level
			);
			$this->M_Admin->updateAdmin($username, $arrayUpdate);
			redirect(base_url('AdminJBM/viewAdmin'));
		}
		else{
			$password = md5($this->input->post('password'));
			$arrayUpdate = array(
				'password' => $password,
				'level' => $level
			);
			$this->M_Admin->updateAdmin($username, $arrayUpdate);
			redirect(base_url('AdminJBM/viewAdmin'));
		}
	}

	public function deleteAdmin()
	{
		$this->M_Login->protectLogin();
		$usernameDELETE = $this->input->post('usernameDELETE');
		if ($this->session->userdata('level') != 'superadmin') {
			redirect(base_url('AdminJBM/dashboard'));
		}

		if($usernameDELETE == NULL){
			redirect(base_url('AdminJBM/viewAdmin'));
		}

		//admin tidak bisa delete diri sendiri
		if ($usernameDELETE == $this->session->userdata('username')) {
			redirect(base_url('AdminJBM/viewAdmin'));
		}
		$this->M_Admin->deleteAdmin($usernameDELETE);
		redirect(base_url('AdminJBM/viewAdmin'));
	}

	public function viewFlayer()
	{
		$this->M_Login->protectLogin();
		$query = $this->M_Admin->getFlayer();
		$data = array(
			'flayer' => $query
		);
		$this->load->view('admin/V_JBM_viewFlayer', $data);
	}

	public function addFlayer()
	{
		$this->M_Login->protectLogin();
		$this->load->view('admin/V_JBM_addFlayer');
	}

	public function addFlayerAction()
	{
		//upload multiple img
		$this->M_Login->protectLogin();
		$files = $_FILES;
		$cpt = count($_FILES['flayer']['name']);
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['flayer']['name']= $files['flayer']['name'][$i];
			$_FILES['flayer']['type']= $files['flayer']['type'][$i];
			$_FILES['flayer']['tmp_name']= $files['flayer']['tmp_name'][$i];
			$_FILES['flayer']['error']= $files['flayer']['error'][$i];
			$_FILES['flayer']['size']= $files['flayer']['size'][$i];    

			$config['upload_path'] = './uploads/flayer/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name'] = 'flayer_' .time(). '_' .$i;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('flayer')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/V_JBM_addFlayer', $error);
			}
			else{
				$flayer = $this->upload->data('file_name');
				$arrayInsert = array(
					'flayer' => $flayer
				);
				$this->M_Admin->addFlayer($arrayInsert);
			}
		}
		redirect(base_url('AdminJBM/viewFlayer'));
	}

	public function deleteFlayer()
	{
		$this->M_Login->protectLogin();
		$idFlayerDELETE = $this->input->post('idFlayerDELETE');
		if($idFlayerDELETE == NULL){
			redirect(base_url('AdminJBM/viewFlayer'));
		}
		
		//unlink file
		$query = $this->M_Admin->getFlayerDetail($idFlayerDELETE);
		$flayer = $query->flayer;
		unlink('./uploads/flayer/'.$flayer);
	
		$this->M_Admin->deleteFlayer($idFlayerDELETE);
		redirect(base_url('AdminJBM/viewFlayer'));
	}

}
	