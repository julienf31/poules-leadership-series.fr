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

	public function add_tournament(){
		$data['disciplines'] = $this->data_model->get_disciplines();
		$this->load->view('add_tournament',$data);
	}

	public function add_tournament_b(){
		$data = array(
			'name' => $this->input->post('tournament_name'),
			'description' => $this->input->post('tournament_description'),
			'mode' => $this->input->post('mode'),
			'created_by' => 'julien',
			'date' => date("Y-m-d h:i:s"));
		$this->data_model->insert('tournament',$data);
		redirect('home/index');
	}
}
