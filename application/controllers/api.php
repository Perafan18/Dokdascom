<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
       
       class Api extends CI_Controller {
       
       	public function __construct()
       	{
       		parent::__construct();
			$this->load->helper("html");
			$this->load->library('session');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('cookie');
       	}
       
       	public function index()
       	{	
       		$nombre = $this->input->post('Nombre');
			$apellido = $this->input->post('Apellido');
			$correo = $this->input->post('Correo');
			$password = $this->input->post('Pasword');
			$birthday  = $this->input->post('Birthday');
			$mes = substr($birthday, 0, 2); 
			$dia = substr($birthday, 3,4);
			$year = substr($birthday, 6,8);
			$genero = $this->input->post('Genero');

			$this->load->model("sesion");

			if (!$this->session->userdata('Dokdas_User_ID')){
				if ($nombre==null || $apellido==null || $correo ==null || $password == null || $year==0 ||$mes==0||$dia==0||$genero==0){
					echo "Hubo un error con tu usuario de facebook";
					echo "\nNombre:".$nombre;
					echo "\nApellido:".$apellido;
					echo "\nCorreo:".$correo;
					echo "\nPassword:".$password;
					echo "\nYeay:".$year;
					echo "\nMes:".$mes;
					echo "\nDia:".$dia;
					echo "\nGenero:".$genero;
				}else{
					$this->load->model("registro");
					$this->load->model("sesion");
						$id = $this->sesion->Iniciar_ID($correo);
				        foreach ($id as $key) {
							$ID = $key->ID;
						}
						if($ID!=0){
							echo "Ya estas registrado";
						}else{
							$data = array(
								'nombre' => $this->input->post('Nombre'),
								'apellido' => $this->input->post('Apellido'),
								'correo' => $this->input->post('Correo'),
								'password' => $this->input->post('Password'),
								'dia' => $dia,
								'mes' => $mes,
								'year' => $year,
								'genero' => $this->input->post('Genero')
							);
							$this->registro->Ingresar($data);
							$id = $this->sesion->Iniciar_ID($correo);
					        foreach ($id as $key) {
								$ID = $key->ID;
							}
							$ip = $this->input->ip_address();
							$datasession = array(
								'Dokdas_User_ID' => $id,
					        	'Dokdas_User_Correo'  => $correo,
					        	'Dokdas_User_Ip' => $ip,
					         	'Dokdas_login_ok' => TRUE
					        );
					        $cookie_id = array(
							    'name'   => 'Dokdas_User_ID',
							    'value'  =>  $ID,
							    'expire' => '18000',
							    'domain' => 'www.dokdas.com',
							    'path'   => '/'
							);
							$cookie_correo = array(
							    'name'   => 'Dokdas_User_Correo',
							    'value'  =>  $correo,
							    'expire' => '18000',
							    'domain' => 'www.dokdas.com',
							    'path'   => '/'
							);

							$this->input->set_cookie($cookie_id); 
							$this->input->set_cookie($cookie_correo); 
					        $this->session->set_userdata($datasession);
					        echo "Listo";
						}
					
				}
			}else{
				$sesion["iniciada"] = TRUE;
				$index["header"] = $this->load->view("include/header",$sesion,TRUE);
				$index_head["titulo"] = "Bienvenido a dokdas!";
				$this->load->view("include/head.php",$index_head);
				$this->load->view('index_l',$index);
			}
		}
       
       }
       
       /* End of file api.php */
       /* Location: ./application/controllers/api.php */       
?>