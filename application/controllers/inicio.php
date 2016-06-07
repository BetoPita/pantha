<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

public function __construct()
{
    parent::__construct();
   $this->load->model("M_banner","mb");
}
public function index()
{
  $this->session->set_userdata('menu','Inicio');
  $datos['banner']=$this->mb->getBanner();
	$this->load->view('v_inicio',$datos);
}

public function promociones(){
  $this->session->set_userdata('menu','promociones');
  $this->load->view('v_promociones');
}
public function tratamiento(){
  $this->session->set_userdata('menu','tratamiento');
  $this->load->view('v_tratamiento');
}
public function proceso(){
   $this->session->set_userdata('menu','proceso');
  $this->load->view('v_proceso');
}
public function contacto(){
   $this->session->set_userdata('menu','formato');
  $this->load->view('v_contacto');
}
public function enviar(){

      $this->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
      $this->form_validation->set_rules('email', 'correo electrónico', 'trim|required|valid_email|xss_clean');
      $this->form_validation->set_rules('telefono', 'teléfono', 'trim|required|is_numeric|exact_length[10]|xss_clean');
      $this->form_validation->set_rules('ciudad', 'ciudad', 'trim|required|xss_clean');
      $this->form_validation->set_rules('mensaje', 'mensaje', 'trim|required|xss_clean'); 
    if ($this->form_validation->run() == true)
    {
          $datos['contacto']=$_POST;
          $titulo = "Nuevo comentario"; 
          $cuerpo = $this->load->view('v_correo',$datos,TRUE);
          enviar_correo("albertopitava@gmail.com",$titulo,$cuerpo,$_POST['email']); 
      //$this->mt->guardar_ticket();
    }
    else{
            $errors = array(
              'nombre' =>form_error('nombre'),
              'email' =>form_error('email'),
              'telefono' =>form_error('telefono'),
              'ciudad' =>form_error('ciudad'),
              'mensaje' =>form_error('mensaje')
              );
          echo json_encode($errors);
      }
}
  public function metodos(){
    $this->load->view('v_metodos');
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */