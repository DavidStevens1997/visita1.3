<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	public function __construct() {

	}

	public function existe($usuario, $clave, $uno) {
		$this->db->from('datos');
		$this->db->where('cedula',$usuario);
		$this->db->where('placa',$clave);
		$this->db->where('nivel',$uno);

		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
	public function existe2($usuario, $clave, $dos) {
		$this->db->from('datos');
		$this->db->where('cedula',$usuario);
		$this->db->where('placa',$clave);
		$this->db->where('nivel',$dos);

		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
	
}
