<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['test']='test';
		$data['tournois'] = $this->data_model->get_tournois();
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

	// Ajout de matches
	public function add_matches($tournament_id){
		$data['tournament'] = $this->data_model->get_tournois($tournament_id);
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
