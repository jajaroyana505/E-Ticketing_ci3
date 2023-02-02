<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

	public function index()
	{
		$this->load->model('Seminar_model');
		$data['seminar'] = $this->Seminar_model->getAll();
		// var_dump($data);
		$this->load->view('seminar', $data);
	}

	public function daftar()
	{
		$data = [
			'id_seminar' => $this->input->post('id_seminar'),
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'kelas' => $this->input->post('kelas'),
			'no_telepon' => $this->input->post('no_telepon')
		];
		$this->load->model('Peserta_model');
		$this->Peserta_model->tambah($data);

		// mengambil data peserta berdasarkan nim
		$pendaftar = $this->Peserta_model->getByNim($this->input->post('nim'));
		$pendaftar =  $pendaftar[0];

		//siapkan data codeQR untuk dimasukan kedalam database 
		$data_qr = [
			'id_peserta' => $pendaftar['id'],
			'id_seminar' => $pendaftar['id_seminar'],
			'token' => $this->generate_token()
		];
		$this->buatQR($data_qr);

		$this->load->library('session');
		$this->session->set_userdata('user_id',$pendaftar['id']);
		redirect(base_url('mahasiswa/tiket'));
	
	}


	public function unset()
	{
		$this->session->unset_userdata('user');
	}


	private function generate_token()
	{
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		return substr(str_shuffle($permitted_chars), 0, 10);
	}


	private function buatQR($data_qr)
	{
		$this->load->library('ciqrcode');

		// mengambil konten
		$isi = $data_qr['token'];

		// nama folder tempat penyimpanan file qrcode
		$penyimpanan = "assets/img/qrcode/";

		// membuat folder dengan nama "temp"
		if (!file_exists($penyimpanan))
			mkdir($penyimpanan);
		// isi qrcode yang ingin dibuat. akan muncul saat di scan
		$isi = $isi;

		// perintah untuk membuat qrcode dan menyimpannya dalam folder temp
		QRcode::png($isi, $penyimpanan . "$isi.png");


		// simpan data QRCode ke database 
		$this->load->model('TokenQR_model');
		$this->TokenQR_model->tambah($data_qr);
	}


	public function tiket()
	{
		$this->load->model('Peserta_model');
		$this->load->model('TokenQR_model');
	
		$peserta= $this->Peserta_model->getById($this->session->userdata('user_id'));
		$peserta = $peserta[0];
		$token = $this->TokenQR_model->getById($this->session->userdata('user_id'));
		$data['nama'] = $peserta['nama'];
		$data['nim'] = $peserta['nim'];
		$data['token'] = $token['token'];
		$this->load->view('tiket',$data);
		// echo 'masuk pak eko';
	}
}
