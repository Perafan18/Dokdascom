<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrar extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function Usuarios($data){
		$time = date("Y-m-d H:i:s");
		$type = 10;
		$this->db->insert('Usuarios',array('Nombre'=> $data['nombre'],'Apellido'=> $data['apellido'], 'Correo'=> $data['correo'], 'Password' => $data['password'],'Type'=>$type,'TimeRegistro'=>$time));	
	}
	function ver_usuarios(){
		$query = $this->db->get('Usuarios');
		if($query->num_rows() > 0) return $query;
		else  return false;
	}
	function ver_usuario($id)
	{
		$this->db->where('ID',$id);	
		$query = $this->db->get('Usuarios');
		if($query->num_rows() > 0) return $query;
		else  return false;
	}
}
?>