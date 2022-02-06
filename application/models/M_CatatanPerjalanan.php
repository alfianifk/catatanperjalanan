<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_CatatanPerjalanan extends CI_Model {

	//Membuat var global untuk semua tabel di dalam aplikasi Catatan Perjalanan
	private $_tableUser = 'user';
	private $_tableAdmin = 'admin';
	private $_tableCatatanPerjalanan = 'catatan_perjalanan';

	//Cari NIK
	public function login()
	{
		//Membuat var $post untuk mempersingkat penulisan
		$post = $this->input->post();

		//Cari user berdasarkan nik
		$this->db->where('nik', $post['nik']);
		$user = $this->db->get($this->_tableUser)->row_array();

		if($user) {
			//SIMPAN SESSION KE DALAM $data
                    $data = [
                    	'id' => $user['id'],
                        'nik' => $user['nik'],
                        'nama' => $user['nama']
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard');
		}else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
        redirect('auth');
		}

	}

	public function register()
	{
		$post = $this->input->post();
		
		$tanggal_lahir = new DateTime($post['ttl']);
		$sekarang = new DateTime("today");
		    if ($tanggal_lahir > $sekarang) { 
		    $thn = "0";
		    }
		$thn = $sekarang->diff($tanggal_lahir)->y;

		$data = [
			'nik' => $post['nik'],
			'nama' => $post['nama_depan'] . $post['nama_belakang'],
			'email' => $post['email'],
			'alamat' => $post['alamat'],
			'ttl' => $post['ttl'],
			'jeniskelamin' => $post['jeniskelamin'],
			'bio' => $post['bio'],
			'umur' => $thn,
			'status_vaksinasi' => $post['status_vaksinasi']
		];

		return $this->db->insert($this->_tableUser, $data, $thn);
	}

	public function admin_login()
	{
		//Membuat var $post untuk mempersingkat penulisan
		$post = $this->input->post();

		//Cari user berdasarkan email
		$this->db->where('email', $post['email']);
		$user = $this->db->get($this->_tableAdmin)->row_array();

		if($user) {
			//SIMPAN SESSION KE DALAM $data

			if(password_verify($post['password'], $user['password'])) {
				$data = [
					'nama' => 'Admin',
					'id' => $user['id']
				];


				$this->session->set_userdata($data);
				redirect('dashboard/admin');
			} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
        redirect('auth/admin');
			}
                    
		}else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
        redirect('auth/admin');
		}
	}

	public function getUserRow($nik)
	{
		$this->db->where('nik', $nik);
       	return $this->db->get($this->_tableUser)->row_array();
	}

	public function tambahCatatan()
	{
		 $post = $this->input->post();
		 $data = [
		 	'lokasi' => $post['lokasi'],
		 	'jam' => $post['jam'],
		 	'suhu_tubuh' => $post['suhu_tubuh'],
		 	'tanggal' => $post['tanggal'],
		 	'id_user' => $this->session->userdata('id')
		 ];

		 return $this->db->insert($this->_tableCatatanPerjalanan, $data);
	}

	public function getAllCatatan()
	{
		$this->db->select('*');
		$this->db->from($this->_tableCatatanPerjalanan);
		$this->db->where('id_user', $this->session->userdata('id'));
		return $this->db->get()->result_array();
	}

	public function getAllCatatanAdm()
	{
		$this->db->select('*');
		$this->db->from($this->_tableCatatanPerjalanan);
		return $this->db->get()->result_array();
	}

	public function getAllUsersAdm()
	{
		$this->db->select('*');
		$this->db->from($this->_tableUser);
		return $this->db->get()->result_array();
	}


}
