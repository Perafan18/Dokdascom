<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("html");
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('cookie');
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$this->load->model("sesion");
		$coockie_id = $this->input->cookie('Dokdas_User_ID'); 
		$coockie_correo = $this->input->cookie('Dokdas_User_Correo');
		if($this->sesion->verificaUsuario_Coockie($coockie_correo, $coockie_id)){
			$ip = $this->input->ip_address();
			$datasession = array(
				'Dokdas_User_ID' => $coockie_id,
	        	'Dokdas_User_Correo'  => $coockie_correo,
	        	'Dokdas_User_Ip' => $ip,
	         	'Dokdas_login_ok' => TRUE
	        );
	        $this->session->set_userdata($datasession);
		}

		if (!$this->session->userdata('Dokdas_User_ID')){
			$sesion["iniciada"] = FALSE;
			$index["header"] = $this->load->view("include/header",$sesion,TRUE);
			$index_head["titulo"] = "Bienvenido a dokdas!";
			$this->load->view("include/head.php",$index_head);
			$this->load->view('welcome_message',$index);
		}else{
			$sesion["iniciada"] = TRUE;
			$index["header"] = $this->load->view("include/header",$sesion,TRUE);
			$index_head["titulo"] = "Bienvenido a dokdas!";
			$this->load->view("include/head.php",$index_head);
			$this->load->view('index_l',$index);
		}


	}
	public function registrarse(){
		$this->form_validation->set_rules('Nombre', 'Nombre', 'trim|required');
		$this->form_validation->set_rules('Apellidos', 'Apellidos', 'trim|required');
		$this->form_validation->set_rules('Correo', 'Correo Electronico', 'trim|required');
		$this->form_validation->set_rules('Recorreo', 'Repite el correo electronico', 'trim|required');
		$this->form_validation->set_rules('Password', 'Password', 'trim|required');

		$this->load->model("sesion");
		$coockie_id = $this->input->cookie('Dokdas_User_ID'); 
		$coockie_correo = $this->input->cookie('Dokdas_User_Correo');
		if($this->sesion->verificaUsuario_Coockie($coockie_correo, $coockie_id)){
			$ip = $this->input->ip_address();
			$datasession = array(
				'Dokdas_User_ID' => $coockie_id,
	        	'Dokdas_User_Correo'  => $coockie_correo,
	        	'Dokdas_User_Ip' => $ip,
	         	'Dokdas_login_ok' => TRUE
	        );
	        $this->session->set_userdata($datasession);
		}

		$year = $this->input->post('Year');
		$mes = $this->input->post('Mes');
		$dia = $this->input->post('Dia');
		$genero = $this->input->post('Genero');
		if (!$this->session->userdata('Dokdas_User_ID')){
			if ($this->form_validation->run() == FALSE || $year==0 ||$mes==0||$dia==0||$genero==0){
				$sesion["iniciada"] = FALSE;
				$registrarse["numero"]=1;
				$registrarse["header"] = $this->load->view("include/header",$sesion,TRUE);
				$registrarse_head["titulo"]="Error al registrarse!";
				$this->load->view("include/head.php",$registrarse_head);
				$this->load->view('error_registro',$registrarse);
			}else{
				$this->load->model("registro");
				$this->load->model("sesion");
				$recorreo = $this->input->post('re-correo');
				$correo = $this->input->post('correo');
				if($correo==$recorreo){
					$id = $this->sesion->Iniciar_ID($correo);
					if($id==FALSE){
						$sesion["iniciada"] = FALSE;
						$registrarse["numero"]=3;
						$registrarse["header"] = $this->load->view("include/header",$sesion,TRUE);
						$registrarse_head["titulo"]="Bienvenido a Dokdas";
						$this->load->view("include/head.php",$registrarse_head);
						$this->load->view('error_registro',$registrarse);
					}else{
						$data = array(
							'nombre' => $this->input->post('Nombre'),
							'apellidos' => $this->input->post('Apellidos'),
							'correo' => $this->input->post('Correo'),
							're-correo' => $this->input->post('Recorreo'),
							'password' => $this->input->post('Password'),
							'dia' => $this->input->post('Dia'),
							'mes' => $this->input->post('Mes'),
							'year' => $this->input->post('Year'),
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
						$this->load->library('email');
						$email_setting  = array('mailtype'=>'html');
						$this->email->initialize($email_setting);
						$this->email->from('registro-noreply@dokdas.com', 'Dokdas');
						$this->email->to($this->input->post('Correo'));
						
						$this->email->subject('Bienvenido a Dokdas');
						$email["Nombre"] = $this->input->post("Nombre");
						$mensaje = $this->load->view('email/mensaje',$email,TRUE);
						$this->email->message($mensaje);
						$this->email->set_alt_message($mensaje);
						$this->email->send();
						$this->input->set_cookie($cookie_id); 
						$this->input->set_cookie($cookie_correo); 
				        $this->session->set_userdata($datasession);
				        $sesion["iniciada"]=TRUE;
				        $sesion["ID_USER"] = $id;
						$registrarse["header"] = $this->load->view("include/header",$sesion,TRUE);
						$registrarse["footer"] = $this->load->view("include/footer","",TRUE);
						$registrarse_head["titulo"]="Gracias por registrarte!";
						$this->load->view("include/head.php",$registrarse_head);
						$this->load->view('registrado',$registrarse);
					}
					
				}else{
					$sesion["iniciada"] = FALSE;
					$registrarse["numero"]=2;
					$registrarse["header"] = $this->load->view("include/header",$sesion,TRUE);
					$registrarse_head["titulo"]="Error al registrarse!";
					$this->load->view("include/head.php",$registrarse_head);
					$this->load->view('error_registro',$registrarse);
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

	public function iniciar(){
		$this->form_validation->set_rules('Usuarios', '', 'required');
		$this->form_validation->set_rules('Contra', '', 'required');
		$this->load->model("sesion");
		$coockie_id = $this->input->cookie('Dokdas_User_ID'); 
		$coockie_correo = $this->input->cookie('Dokdas_User_Correo');
		if($this->sesion->verificaUsuario_Coockie($coockie_correo, $coockie_id)){
			$ip = $this->input->ip_address();
			$datasession = array(
				'Dokdas_User_ID' => $coockie_id,
	        	'Dokdas_User_Correo'  => $coockie_correo,
	        	'Dokdas_User_Ip' => $ip,
	         	'Dokdas_login_ok' => TRUE
	        );
	        $this->session->set_userdata($datasession);
		}
		if (!$this->session->userdata('Dokdas_User_ID')){
			if ($this->form_validation->run() == FALSE){
				$iniciar_head["titulo"]="Gracias por registrarte!";
				$iniciar_error["numero"]=1;
				$sesion["iniciada"] = FALSE;
				$iniciar_error["header"] = $this->load->view("include/header",$sesion,TRUE);
				$this->load->view("include/head.php",$iniciar_head);
				$this->load->view("error_inicio_sesion",$iniciar_error);
			}else{
				//Todos los campos son enviados
				$correo = $this->input->post('Usuarios');
	      		$contrasena = sha1($this->input->post('Contra'));
				$this->load->model("registro");
				$this->load->model("sesion");
				if($this->sesion->verificar($correo)){
					//existe el Usuario
					if ($this->sesion->verificaUsuario($correo, $contrasena)){
			        $id = $this->sesion->Iniciar_ID($correo);
			        foreach ($id as $key) {
						$ID = $key->ID;
					}
					$ip = $this->input->ip_address();
					$datasession = array(
						'Dokdas_User_ID' => $ID,
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
			        redirect('welcome', 'refresh');
			        
			      } else {
						$iniciar_head["titulo"]="Gracias por registrarte!";
						$iniciar_error["numero"]=3;
						$sesion["iniciada"] = FALSE;
						$iniciar_error["header"] = $this->load->view("include/header",$sesion,TRUE);
						$this->load->view("include/head.php",$iniciar_head);
						$this->load->view("error_inicio_sesion",$iniciar_error);
					}
					
				}else{
					//No existe el usuario
					$iniciar_head["titulo"]="Gracias por registrarte!";
					$iniciar_error["numero"]=2;
					$sesion["iniciada"] = FALSE;
					$iniciar_error["header"] = $this->load->view("include/header",$sesion,TRUE);
					$this->load->view("include/head.php",$iniciar_head);
					$this->load->view("error_inicio_sesion",$iniciar_error);
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
	public function logout(){
		 // creamos un array con las variables de sesión en blanco
		 delete_cookie("Dokdas_User_ID","www.dokdas.com","/");
	    delete_cookie("Dokdas_User_Correo","www.dokdas.com","/");
	    $datasession = array('Dokdas_User_ID' => '', 'Dokdas_User_Correo' => '','Dokdas_User_Ip'=> '' ,'Dokdas_login_ok' => FALSE);

	    // y eliminamos la sesión
	    $this->session->unset_userdata($datasession);
	    // redirigimos al controlador principal
	    redirect('welcome', 'refresh');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */