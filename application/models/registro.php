<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function Ingresar($data){
		$nacimiento = $data["year"]."-".$data["mes"]."-".$data["dia"];
		$time = date("Y-m-d H:i:s");
		$user_agent = $this->input->user_agent();
		$ip =  $this->input->ip_address();
		$password = sha1($data["password"]);
		$this->db->insert('usuarios',array('Nombre'=> $data['nombre'],'Apellidos'=> $data['apellidos'], 'Correo'=> $data['correo'], 'Password' => $password,'Nacimiento'=>$nacimiento,'Genero'=>$data["genero"],'IP'=>$ip,'User_agent'=>$user_agent,'Time'=>$time));	
	}

}


?>