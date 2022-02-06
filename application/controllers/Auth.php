<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('M_CatatanPerjalanan');
    }

	public function index()
	{

		$validation = $this->form_validation;

        $validation->set_rules('nik', 'Nik', 'required');
        $validation->set_rules('nama', 'Nama', 'required');

        if ($validation->run() == TRUE) {
           $this->M_CatatanPerjalanan->login();
        } else {
            $this->load->view('auth/login');
        }
	}

	public function admin()
	{
		$validation = $this->form_validation;

        $validation->set_rules('email', 'Email', 'required');
        $validation->set_rules('password', 'Password', 'required');

        if ($validation->run() == TRUE) {
           $this->M_CatatanPerjalanan->admin_login();
        } else {
            $this->load->view('auth/admin_login');
        }
	}

	public function register()
	{
		$validation = $this->form_validation;

		$validation->set_rules('nama_depan', 'Nama_Depan', 'required');
		// $validation->set_rules('nama_belakang', 'Nama_Belakang', 'required');
		// $validation->set_rules('nik', 'Nik', 'required');
		// $validation->set_rules('nama_depan', 'Nama_Depan', 'required');
		// $validation->set_rules('jeniskelamin', 'Jeniskelamin', 'required');
		// $validation->set_rules('tanggal', 'Tanggal', 'required');
		// $validation->set_rules('status_vaksinasi', 'Status_vaksinasi', 'required');
		// $validation->set_rules('alamat', 'Alamat', 'required');
		// $validation->set_rules('bio', 'Bio', 'required');

		if ($validation->run() == TRUE) {
			$this->M_CatatanPerjalanan->register();
			$this->session->set_flashdata('message', '<div class="text-center text-danger">Silahkan Login!</div>');
       redirect('auth');
		} else {
			$this->load->view('auth/register');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('nama'); 
		$this->session->unset_userdata('id');
		$this->session->set_flashdata('message', '<div class="text-center text-danger">Anda berhasil logout!</div>');
       redirect('auth');
	}
}
