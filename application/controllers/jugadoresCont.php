<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JugadoresCont extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		//$this->load->library('database');
		//$this->load->database('mydb');
	}

	function index(){
		$this->load->view('header');
		$this->load->view('jugadoresVista');
	}

	function agregar(){
		$this->load->view('header');
		$this->load->view("jugadoresVistas/formularioJug");
	}

	/*function recibirDatos(){
		$data=array('nombre'=>$this->input->post('nombre'),
			'division'=>$this->input->post('division'),
			'fechaCreacion'=>$this->input->post('fecha'),
			);
		$this->equipo_model->crearEquipo($data);
		$this->load->view('equiposVista');
	}*/
}