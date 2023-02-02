<?php 

class Admin extends CI_Controller{
   public function scan()
   {
      $this->load->view('scan');
   }
   public function cek_token()
   {
      $this->load->view('masuk');
   }
}