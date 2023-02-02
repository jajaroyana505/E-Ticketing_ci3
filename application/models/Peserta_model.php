<?php
class Peserta_model extends CI_Model
{
   public function tambah($data)
   {
      $this->db->insert('peserta', $data);
   }

   public function getByNim($nim)
   {
      return $this->db->get_where('peserta',array('nim'=>$nim))->result_array();
      
   }
   public function getById($id)
   {
      return $this->db->get_where('peserta',array('id'=>$id))->result_array();
      
   }
}
