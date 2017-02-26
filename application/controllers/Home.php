<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['tournois'] = $this->data_model->get_tournois();
		$data['teams'] = $this->data_model->get_teams();
		$data['nbteams'] = $this->data_model->get_nb_teams();
		$this->load->view('home', $data);
	}

	public function liste(){
		$this->load->view('liste', $data);
	}

	// Afficher les détails d'un tournoi
	public function show_tournament($tournament_id){
		$data['tournament'] = $this->data_model->get_tournois($tournament_id);
		$data['tournament']['matchs'] = $this->data_model->get_match($tournament_id);
		$this->load->view('tournament_detail', $data);
	}
	// Ajout d'un tournoi
	public function add_tournament(){
		$data['disciplines'] = $this->data_model->get_disciplines();
		$this->load->view('add_tournament', $data);
	}

	// Traitement des données du formulaire (nom maladroit à changer)
	public function add_tournament_b(){
		$data = array(
			'name' => $this->input->post('tournament_name'),
			'description' => $this->input->post('tournament_description'),
			'mode' => $this->input->post('mode'),
			'created_by' => 'julien',
			'date' => date("Y-m-d h:i:s"));
		$this->data_model->insert('tournament', $data);
		redirect('home/index');
	}

	public function launch_tournament($tournament_id){
		$data['disciplines'] = $this->data_model->get_disciplines();
		$data['tournament'] = $this->data_model->get_tournois($tournament_id);
		$this->load->view('launch_tournament', $data);
	}

	public function launch_tournament_b($tournament_id){
		$nbteams = $this->input->post('nbteams');
		$this->data_model->update('tournament','nbteams',$nbteams,$tournament_id);
		redirect('home/index');
	}

	public function teams(){
		
	}

	public function teams_tournament($tournament_id){
		$data['nbteams'] = $this->data_model->get_nb_teams();
		$data['teams'] = $this->data_model->get_teams();
		$data['tournament'] = $this->data_model->get_tournois($tournament_id);
		$data['participants'] = $this->data_model->get_teams_tournament($tournament_id);
		$this->load->view('teams_tournament', $data);
	}

	public function tournament_teams_list_b($tournament_id){
		$data['nbteams'] = $this->data_model->get_nb_teams();
		$data['teams'] = $this->data_model->get_teams();
		$data['tournament'] = $this->data_model->get_tournois($tournament_id);
		$nbteams = intval($data['tournament']['nbteams']);
		// Vidage SQL
		$this->data_model->remove_team($tournament_id);
		for($i = 1; $i <= $nbteams ;$i++){
			$input = "team-$i";
			$data = array(
				'tournament_id' => $tournament_id,
				'team_id' => $this->input->post($input)
			);
			$this->data_model->insert('participants', $data);
		}
		redirect('home/show_tournament/'.$tournament_id);
	}

	// Ajout de matches
	public function add_matches($tournament_id){
		$data['tournament'] = $this->data_model->get_tournois($tournament_id);
		$data['teams'] = $this->data_model->get_teams_tournament($tournament_id);
		$this->load->view('add_matches', $data);
	}

	public function add_matches_b($tournament_id){
		$data = array(

		);
		//$this->data_model->insert('matchs', $data);
		$this->data_model->inc_matches_count($tournament_id);
		redirect('home/show_tournament/'.$tournament_id);
	}
}
