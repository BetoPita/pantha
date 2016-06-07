<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       $this->load->model("M_login");
    }

	    /*
  Descripción: es la vista principal del login para que entren al sistema
  * Regresa: nada
  * Parámetros : ninguno
  * Autor : Luis Alberto Pita Vázquez

  */
	public function index(){
        $this->load->view('login/login');
		
	}


    /*
  Descripción: valida si el usuario está registrado en la base de datos ingresa al sistema 
  * Regresa: vista de ingredientes
  * Parámetros : usuario y contraseña
  * Autor : Luis Alberto Pita Vázquez

  */
  public function ingresar(){
    if($this->input->post()){
      $correo= $this->input->post("correo");
      $password=md5(sha1($this->input->post("password")));

      $ingreso= $this->M_login->login($correo,$password);

      if(!is_object($ingreso)){
        //Login incorrecto
        $this->session->sess_destroy();
        $error['texto']="Usuario y/o contraseña no validos";
        $this->load->view('login/login',$error);
      }else{
        $this->session->set_userdata('id',$ingreso->id);
         $this->session->set_userdata('usuario',$ingreso->correo);
        redirect("banner");

      }
    }
  }

      /*
  Descripción:cierra la sesión
  * Regresa: vista del login
  * Parámetros : nada
  * Autor : Luis Alberto Pita Vázquez

  */

 public function logout()
  {
    $this->session->sess_destroy();
    $this->load->view('login');           

  }
  
 
    
}
