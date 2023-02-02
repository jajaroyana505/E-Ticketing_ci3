<?php
class TokenQR_model extends CI_Model
{
   public function tambah($data)
   {
      $this->db->insert('token_qr', $data);
   }

   public function getById($id)
   {
      return $this->db->get_where('token_qr',['id_peserta'=> $id])->row_array();
   }
}
