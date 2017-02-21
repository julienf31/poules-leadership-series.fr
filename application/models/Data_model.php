<?php
Class Data_model extends CI_Model
{
  public function __construct(){
    parent::__construct();
  }

  public function insert($table,$data){
      $this->db->insert($table, $data);
  }

  public function get_tournois(){
    $this->db->from('tournament');
    //$this->db->where('visible',1);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_disciplines(){
    $this->db->from('mode');
    $query = $this->db->get();
    return $query->result_array();
  }
}