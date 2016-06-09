<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model("M_banner","mb");
    $this->load->model("M_promocion","mp");
    $this->load->model("M_imagenes","mi");
    $this->load->model("M_evento","me");
}
public function index()
{
  $this->session->set_userdata('menu','Inicio');
  $datos['banner']=$this->mb->getBanner();
  $datos['imagenes']=$this->mi->getImagenes();
	$this->load->view('v_inicio',$datos);
}

public function promociones(){
  $this->session->set_userdata('menu','promociones');
  $datos['promociones']=$this->mp->getPromocion();  
  $datos['imagenes']=$this->mi->getImagenes();
  $this->load->view('v_promociones',$datos);
}
public function eventos(){
  $this->session->set_userdata('menu','metal');
  $datos['eventos']=$this->me->getEvento(); 
  $datos['imagenes']=$this->mi->getImagenes();
  $this->load->view('v_eventos',$datos);
}

public function contacto(){
  $this->session->set_userdata('menu','contacto');
  $datos['imagenes']=$this->mi->getImagenes();
  $this->load->view('v_contacto',$datos);
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
          enviar_correo("edgar@the4studio.com ",$titulo,$cuerpo,$_POST['email']); 
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


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */