<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class equipo_model extends CI_Model {
	
	function crearEquipo(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'division' => $this->input->post('division'),
			'fechaCreacion' => $this->input->post('fecha')
			);
		return $this->db->insert('Equipo', $data);
	}

}
