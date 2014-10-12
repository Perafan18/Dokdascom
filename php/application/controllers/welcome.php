<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$index["titulo"] = "Bienvenido a Dokdas";	
		$this->load->view('include/head',$index);
		$this->load->view('inicio');
		$this->load->view('include/footer');
	}
	public function mensaje(){
		$this->load->helper('html');	
		$this->load->library('email');
		$configuraciones["mailtype"] = "html";
		$this->email->initialize($configuraciones);
		$this->email->from("pedro_inat18@hotmail.com","Pedro Perafan");
		$this->email->to("pedroperafan18@gmail.com");
		$this->email->subject("Probando Codeigniter");
		$this->email->message("<h1>Hola!</h1>");
		$this->email->send();
		$this->load->view("include/head");
		$this->load->view("inicio");
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */