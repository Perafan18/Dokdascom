<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');     
class Sesion extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function verificar($correo){
		$this->db->where('Correo',$correo);	
		$query = $this->db->get('usuarios');
		if($query->num_rows() > 0)        {
            return $query->result();
        }else{
        	return false;
        }
	}
	public function Iniciar_ID($correo){
		$this->db->select("ID");
		$this->db->where('Correo',$correo);	
		$query = $this->db->get('usuarios');
		if($query->num_rows() > 0 )
        {
            return $query->result();
        }else{
        	return false;
        }
	}
	function verificaUsuario($usuario, $contrasena){
    $this->db->select('ID, Correo');
    $this->db->where('Correo', $usuario);
    $this->db->where('Password', $contrasena);
    $this->db->limit(1);
    $query = $this->db->get('usuarios');
	    if ($query->num_rows() > 0){
	      return $query->result();
	    } else {
	      return FALSE;
	    }
	}

    function verificaUsuario_Coockie($usuario, $ID){
    $this->db->select('ID, Correo');
    $this->db->where('ID', $ID);
    $this->db->where('Correo', $usuario);
    $this->db->limit(1);
    $query = $this->db->get('usuarios');
    if ($query->num_rows() > 0){
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
?>