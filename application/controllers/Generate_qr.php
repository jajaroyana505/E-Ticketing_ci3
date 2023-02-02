<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Generate_qr extends CI_Controller
{

   public function index()
   {
      $data['img'] = false;
      $this->load->view('buat_qr', $data);
   }
   public function generate()
   {
      $this->load->library('ciqrcode');

      // mengambil konten
      $isi = $this->input->post('konten');

      // nama folder tempat penyimpanan file qrcode
      $penyimpanan = "assets/img/qrcode/";

      // membuat folder dengan nama "temp"
      if (!file_exists($penyimpanan))
         mkdir($penyimpanan);

      // isi qrcode yang ingin dibuat. akan muncul saat di scan
      $isi = $isi;

      // perintah untuk membuat qrcode dan menyimpannya dalam folder temp
      QRcode::png($isi, $penyimpanan . "$isi.png");

      $data['img'] = $isi;
      $this->load->view('buat_qr', $data);
   }

   public function baca_qr()
   {
      $this->load->view('baca_qr');
   }
}
