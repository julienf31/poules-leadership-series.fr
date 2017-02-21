<?php
Class Data_model extends CI_Model
{
  public function __construct(){
    parent::__construct();
  }
  /*
    Le modéle dans le MVC est la partie qui traite les données
  */
  
  // Insertion de données dans une table transmise en paramétre
  //Attention au formatage de $data qui doit correspondre à la structure de la table
  public function insert($table,$data){
      $this->db->insert($table, $data);
  }

  // Récupérer les tournois
  public function get_tournois(){
    $this->db->from('tournament');
    //$this->db->where('visible',1);
    $query = $this->db->get();
    return $query->result_array();
  }

  // Récupérer les disciplines
  public function get_disciplines(){
    $this->db->from('mode');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Récupérer les matches d'un tournois en paramétre
  public function get_match($tournament_id){
    $this->db->from('match');
    $this->db->where('tournament_id', $tournament_id);
    $query = $this->db->get();
    return $query->result_array();
  }
}