<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class equipo_model extends CI_Model {
	
	public function crearEquipo(){
		$this->db->insert('equipo', array('nombre'=>$data['nombre'], 'division'=>$data['division']);
	}

}
