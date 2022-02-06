<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('M_CatatanPerjalanan');
        $this->load->library('Pdf');
    }

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['catatan'] = $this->M_CatatanPerjalanan->getAllCatatan();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('layout/footer');
	}

	public function profile()
	{
		$data['title'] = "Profile";
		$data['user'] = $this->M_CatatanPerjalanan->getUserRow($this->session->userdata('nik'));
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('user/profile', $data);
		$this->load->view('layout/footer');	
	}

	public function tambahCatatan()
	{
		$validation = $this->form_validation;

		$validation->set_rules('tanggal' , 'Tanggal',  'required');
		$validation->set_rules('lokasi', 'Lokasi', 'required');
		$validation->set_rules('jam', 'Jam', 'required');
		$validation->set_rules('suhu_tubuh', 'Suhu_Tubuh', 'required');

		if ($validation->run() == TRUE)
		{
			$this->M_CatatanPerjalanan->tambahCatatan();
			$this->session->set_flashdata('berhasil', '<div class="alert alert-success" role="alert">Terima kasih! Data sudah tersimpan</div>');
			redirect('dashboard/tambahCatatan');
		} else {

			$data['title'] = "Profile";
			$data['user'] = $this->M_CatatanPerjalanan->getUserRow($this->session->userdata('nik'));
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar', $data);
			$this->load->view('user/tambahCatatan', $data);
			$this->load->view('layout/footer');	
		}

	}

	function cetakPdf()
	{
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();
        $judul = 'Laporan Catatan Perjalanan';
        $subjudul = $this->session->userdata('nama');

        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(0,7,$judul,0,1,'C');        
        $pdf->SetFont('Arial','B','12');
        $pdf->Cell(0,7, $subjudul , '0', '1', 'C',false);
        $pdf->Cell(255,0.6,'','0','1','C',true);
        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(60,6,'Hari/Tanggal',1,0,'C');
        $pdf->Cell(85,6,'Lokasi yang di Kunjungi',1,0,'C');
        $pdf->Cell(50,6,'Jam',1,0,'C');
        $pdf->Cell(50,6,'Suhu Tubuh',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $catatan = $this->M_CatatanPerjalanan->getAllCatatan();
        $no=0;
        foreach ($catatan as $data){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(60,6,$data['tanggal'],1,0, 'C');
            $pdf->Cell(85,6,$data['lokasi'],1,0, 'C');
            $pdf->Cell(50,6,$data['jam'],1,0, 'C');
            $pdf->Cell(50,6,$data['suhu_tubuh'],1,1, 'C');
        }
        $pdf->Output();
	}

	function cetakPdfUsers()
	{
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();
        $judul = 'Laporan Pengguna';
        $subjudul = $this->session->userdata('nama');

        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(0,7,$judul,0,1,'C');        
        $pdf->SetFont('Arial','B','12');
        $pdf->Cell(0,7, $subjudul , '0', '1', 'C',false);
        $pdf->Cell(255,0.6,'','0','1','C',true);
        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(60,6,'NIK',1,0,'C');
        $pdf->Cell(85,6,'Nama',1,0,'C');
        $pdf->Cell(50,6,'Umur',1,0,'C');
        $pdf->Cell(50,6,'Alamat',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $users = $this->M_CatatanPerjalanan->getAllUsersAdm();
        $no=0;
        foreach ($users as $data){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(60,6,$data['nik'],1,0, 'C');
            $pdf->Cell(85,6,$data['nama'],1,0, 'C');
            $pdf->Cell(50,6,$data['umur'],1,0, 'C');
            $pdf->Cell(50,6,$data['alamat'],1,1, 'C');
        }
        $pdf->Output();
	}

	public function admin()
	{
		$data['title'] = "Admin";
		$data['catatan'] = $this->M_CatatanPerjalanan->getAllCatatan();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('layout/footer');	
	}

	public function users()
	{
		$data['title'] = "Admin";
		$data['users'] = $this->M_CatatanPerjalanan->getAllUsersAdm();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('admin/users', $data);
		$this->load->view('layout/footer');	
	}
}
