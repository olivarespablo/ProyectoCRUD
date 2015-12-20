<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EquiposCont extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('equipo_model');
		$this->load->library('form_validation');
		//$this->load->library('database');
		//$this->load->database('mydb');
	}

	public function index(){
		$this->load->view('equiposVista');
		$this->load->view('header');
	}

	public function agregar(){
		$this->load->view('header');
		$this->load->view("equipoVistas/formularioEq");
	}

	public function recibirDatos(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|is_unique[Equipo.nombre]');
		/*$data=array('nombre'=>$this->input->post('nombre'),
			'division'=>$this->input->post('division'),
			'fechaCreacion'=>$this->input->post('fecha'),
			);*/
		if(!$this->form_validation->run()) {
			$this->load->view('header');
			$this->load->view('equipoVistas/formularioEq');
		} else {
		$this->equipo_model->crearEquipo();
		redirect('EquiposCont/index/');
		//$this->load->view('equiposVista');
		}
	}
}