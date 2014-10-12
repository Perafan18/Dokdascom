<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chaparrita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("html");
	}

	public function index()
	{
		$sesion["iniciada"] = FALSE;
		$index["header"] = $this->load->view("include/header",$sesion,TRUE);
		$index_head["titulo"] = "Bienvenido a dokdas!";
		$this->load->view("include/head.php",$index_head);
		$this->load->view('welcome_message',$index);
	}
	public function hermosa(){
		$sesion["iniciada"] = FALSE;
		$index["header"] = $this->load->view("include/header",$sesion,TRUE);
		$index_head["titulo"] = "Para mi Chaparrita hermosa <3 !";
		$this->load->view("include/head.php",$index_head);
		$this->load->view("otros/ale",$index);
	}

}

/* End of file chaparrita.php */
/* Location: ./application/controllers/chaparrita.php */