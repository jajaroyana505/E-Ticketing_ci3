<?php

class Seminar_model extends CI_Model
{
   public function getAll()
   {
      return $this->db->get('seminar')->result_array();
   }
}
