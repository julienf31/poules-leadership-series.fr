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

  public function update($table,$column,$val,$tournament_id){
    $this->db->set($column, $val);
    $this->db->where('id', $tournament_id);
    $this->db->update($table);
  }

  public function get_nb_teams(){
    $result = $this->db->count_all('team');
    return $result;
  }

  public function get_teams(){
    $result = $this->db->get('team');
    return $result->result_array();
  }

  public function inc_matches_count($tournament_id){
    $this->db->where('id', $tournament_id);
    $this->db->set('matches', 'matches+1', FALSE);
    $this->db->update('tournament');
  }

  // Récupérer les tournois
  public function get_tournois($tournament_id = null){
    $this->db->from('tournament');
    if($tournament_id){
      $this->db->where('id',$tournament_id);
      $query = $this->db->get();
      return $query->row_array();
    }
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