<?if (!defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('url','html','form','cookie'));
		$this->load->model(array("sesion","cargar"));

    }

    public function index() {

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

		if ($this->session->userdata('Dokdas_User_ID')){
		//Existe una session
			if (!$this->uri->segment(3))
			{
				//Existe session pero no tercer parametro
				//Imprimir Perfil del usuario con sesion iniciada
				$id = $this->session->userdata('Dokdas_User_ID');
				$id = $this->cargar->perfil($id);
				if($id){
			        foreach ($id as $key) {
						$index["Nombre"] = $key->Nombre;
						$index["Nombre"] = $index["Nombre"].' '.$key->Apellidos;
					}
					$sesion["iniciada"] = TRUE;
					$index["header"] = $this->load->view("include/header",$sesion,TRUE);

					$index["Foto"] = "";	
					$index["Posts"] = "";
					$index["Seguidores"] = 0;
					$index["Siguiendo"] = 0;
					$index["Mejores_post"] = "";
					$index_head["titulo"] = "Bienvenido a dokdas!";
					$this->load->view("include/head.php",$index_head);
					$this->load->view('perfil_s',$index);
				}else{
					$this->load->view('error');
				}
			}
			else
			{
				//Existe el tercer parametro
				//Imprimir Perfil de usuario deseado con permisos extras
				$id = $this->uri->segment(3);
				$id = $this->cargar->perfil($id);
				if($id){
			        foreach ($id as $key) {
						$index["Nombre"] = $key->Nombre;
						$index["Nombre"] = $index["Nombre"].' '.$key->Nombre;
					}
					$sesion["iniciada"] = TRUE;
					$index_head["titulo"] = "Bienvenido a dokdas!";
				    $this->load->view("include/head.php",$index_head);
				    $index["header"] = $this->load->view("include/header",$sesion,TRUE);
					$this->load->view('index_l',$index);
				}else{
					$this->load->view('error');
				}
			}
		}else{
		//No existe una session
			if (!$this->uri->segment(3))
			{
				//Existe session ni un tercer parametro
				//redireccionar al inicio (controller welcome)
			    redirect("welcome");
			}
			else
			{
				//Existe el tercer parametro
				//Imprimir Perfil de usuario deseado 
			    $id = $this->session->userdata('Dokdas_User_ID');
				$id = $this->cargar->perfil($id);
				if($id){
			        foreach ($id as $key) {
						$index["Nombre"] = $key->Nombre;
						$index["Nombre"] = $index["Nombre"].' '.$key->Nombre;
					}
					$sesion["iniciada"] = FALSE;
					$index["header"] = $this->load->view("include/header",$sesion,TRUE);

					$index["Foto"] = "";	
					$index["Posts"] = "";
					$index["Seguidores"] = 0;
					$index["Siguiendo"] = 0;
					$index["Mejores_post"] = "";
					$index_head["titulo"] = "Bienvenido a dokdas!";
					$this->load->view("include/head.php",$index_head);
					$this->load->view('perfil_s',$index);
				}else{
					$this->load->view('error');
				}
			}
		}
    } //Fin de funcion Index

    function subir_foto(){	
		if(!$this->session->userdata('Dokdas_User_ID')){
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
		}


		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);

		if ($this->session->userdata('Dokdas_User_ID')){
			if ( ! $this->upload->do_upload('foto')){

				$id = $this->session->userdata('Dokdas_User_ID');
				$id = $this->cargar->perfil($id);
				if($id){
			        foreach ($id as $key) {
						$index["Nombre"] = $key->Nombre;
						$index["Nombre"] = $index["Nombre"].' '.$key->Apellidos;
					}
					$sesion["iniciada"] = TRUE;
					$index["header"] = $this->load->view("include/header",$sesion,TRUE);

					$index["Foto"] = "";	
					$index["Posts"] = "";
					$index["Seguidores"] = 0;
					$index["Siguiendo"] = 0;
					$index["Mejores_post"] = "";
					$index['error'] = $this->upload->display_errors();
					$index_head["titulo"] = "Bienvenido a dokdas!";
					$this->load->view("include/head.php",$index_head);
					$this->load->view('perfil_s',$index);
				}else{
					$this->load->view('error');
				}


			}else{

				$data= $this->upload->data();
				foreach ($data as $item => $value){
					if($item = "file_name"){
						$imagen =  $value;
						
					}
				}
				redirect('perfil', 'refresh');
			}
		}else{
			redirect('welcome', 'refresh');
		}
	}
}
        
?>