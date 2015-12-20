<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EquiposCont extends CI_Controller{

	function _construct(){
		parent::_construct();
		$this->load->helper('form');
		$this->load->model('equipo_model');
		$this->load->library('database');
		$this->load->database('mydb');
	}

	function index(){
		$this->load->view('equiposVista');
		$this->load->view('header');
	}

	function agregar(){
		$this->load->view('header');
		$this->load->view("equipoVistas/formularioEq");
	}

	function recibirDatos(){
		$data=array('nombre'=>$this->input->post('nombre'),
			'division'=>$this->input->post('division'),
			'fechaCreacion'=>$this->input->post('fecha'),
			);
		$this->equipo_model->crearEquipo($data);
		$this->load->view('equiposVista');
	}
}