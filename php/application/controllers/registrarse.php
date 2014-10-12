<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrarse extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('registrar');
	}
	public function index()
	{
		$this->load->view('formulario');
	}
	public function registrarUsuario(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'correo' => $this->input->post('correo'),
			're-correo' => $this->input->post('re-correo'),
			'password' => $this->input->post('password')
		);
		
		$this->registrar->Usuarios($data);
		$datos["string"] = 'Hola';
		$this->load->view('welcome_message',$datos);
	}
	public function verusuarios(){
		$url["segmento"] = $this->uri->segment(3);
		if(!$url["segmento"]){
			$data["usuarios"] = $this->registrar->ver_usuarios();	
		}else{
			$data["usuarios"] = $this->registrar->ver_usuario($url["segmento"]);
		}
		
		$this->load->view('usuarios',$data);
	}
}
?>