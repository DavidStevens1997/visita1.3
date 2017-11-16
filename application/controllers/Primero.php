<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Primero extends CI_Controller {

	

	function __construct() {
        	parent::__construct();
    	}

	public function index() {

		$this->load->view('menu');
	}
	public function registro()
	{
		$this->load->view('segunda');
	}
	public function login() 
	{
		$this->load->view('primera');
	}

	public function validar(){
			
		if ( ! $this->input->post('user') && ! $this->input->post('clave'))
		{
			echo '<script language="javascript">alert("Faltan campos por diligenciar, dale atras!");</script>'; 
			return $this->load->view('error');
		} else {
			$username = $this->input->post('user');
			$password = $this->input->post('clave');
			$uno= "1";
			$dos= "2";
			
			if($this->Usuarios->existe($username, $password, $uno)) {
				echo '<script language="javascript">alert("alguno de los campos esta incorrecto verificar");</script>';
				$this->load->view('menu');
				
			}else{
			
				redirect('validar/inicial');

			}


			/*else if($this->Usuarios->existe2($username, $password, $dos)){
				redirect('validar/usuarioview');				 

			}else{

				echo '<script language="javascript">alert("Usuario o clave incorrecta");</script>'; 
				$this->load->view('primera');
			}*/
		}
	}
}
