<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cargar extends CI_Model {
    public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    public function perfil($ID){
        $this->db->select("Nombre, Apellidos");
        $this->db->where("ID",$ID);
        $query = $this->db->get("usuarios");
        if ($query->num_rows() > 0){
          return $query->result();
        } else {
          return FALSE;
        }
    }
}
        

?>