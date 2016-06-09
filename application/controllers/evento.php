<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evento extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       $this->load->model("M_evento","me");
       $this->msg=$this->session->flashdata('msg');
    }

      /*
  Descripción: Obtiene los productos registrados en la base de datos.
  * Regresa: sucursales
  * Parámetros : ninguno
  * Autor : Rflpz

  */


	public function index(){
     if(validar_sesion()){

        $data['evento'] = $this->me->getEvento();
        $this->load->view('eventos/v_evento',$data);

        }else{

          $error['texto']="Favor de iniciar sesión";
          $this->load->view('login',$error);
         }



	}




  function agregar()
  {
    $id=$this->input->get("id");
    if($this->input->post() != ''){   
      $this->form_validation->set_rules('artista', 'artista', 'trim|required|xss_clean');
      $this->form_validation->set_rules('precio', 'precio', 'trim|required|xss_clean');
      $this->form_validation->set_rules('lugar', 'lugar', 'trim|required|xss_clean');
      $this->form_validation->set_rules('fecha', 'fecha', 'trim|required|xss_clean');
      $this->form_validation->set_rules('hora', 'hora', 'trim|required|xss_clean');
      $this->form_validation->set_rules('link', 'link', 'trim|required|xss_clean');
      $this->form_validation->set_rules('texto', 'texto', 'trim|required|xss_clean');

     
    
      if ($this->form_validation->run()){ 
           if($id==0){   
            $datos = array('artista' =>$this->input->post("artista"),  
                                'precio' =>$this->input->post("precio"), 
                                'lugar' =>$this->input->post("lugar"), 
                                'fecha' =>date2sql($this->input->post("fecha")), 
                                'hora' =>$this->input->post("hora"), 
                                'link' =>$this->input->post("link"), 
                                'texto' =>$this->input->post("texto"),            
                      );
                       
              if($this->me->guardarEvento($datos)) {
                $id=$this->db->insert_id();    
                  $this->session->set_flashdata('msg', 'Registro guardado correctamente.');
                  redirect('evento/index');
                   
              }else{
                $this->form_validation->msg = 'El registro no se guardo, intente otra vez.';  
                
              }
            }else{
              
                 $datos = array('artista' =>$this->input->post("artista"),  
                                'precio' =>$this->input->post("precio"), 
                                'lugar' =>$this->input->post("lugar"), 
                                'fecha' =>date2sql($this->input->post("fecha")), 
                                'hora' =>$this->input->post("hora"), 
                                'link' =>$this->input->post("link"), 
                                'texto' =>$this->input->post("texto"),            
                      );
              if($this->me->actualizarEvento($datos,$id)) {
                $this->session->set_flashdata('msg', 'Guardado correctamente.');
                    redirect('evento/index');
              }else{
                $this->session->set_flashdata('msg', 'El registro no se guardo, intente otra vez.');
              }
            }
      }else{
       // $this->form_validation->msg = (validation_errors()) ? validation_errors() : ''; 
            
      }
    }

    if($id==0){
      $this->info=new Stdclass();
      $this->id=0;
      
    }else{
      $this->info= $this->me->getEventoId($id);
      $this->info=$this->info[0];
      $this->id=$this->info->id;
    }
    //print_r($this->info);die();


    $data['input_id'] = $this->id;
    $data['input_artista'] = form_input('artista',set_value('artista',exist_obj($this->info,'artista')),'class="form-control" id="artista" ');
    





  $data['input_precio'] = form_input('precio',set_value('precio',exist_obj($this->info,'precio')),'class="form-control" id="precio" ');
  $data['input_lugar'] = form_input('lugar',set_value('lugar',exist_obj($this->info,'lugar')),'class="form-control" id="lugar" maxlength="40" ');
  $data['input_fecha'] = form_input('fecha',date_eng2esp_1(set_value('fecha',exist_obj($this->info,'fecha'))),'class="form-control date" id="fecha" ');
  $data['input_hora'] = form_input('hora',set_value('hora',exist_obj($this->info,'hora')),'class="form-control hora" id="hora" ');
  $data['input_link'] = form_input('link',set_value('link',exist_obj($this->info,'link')),'class="form-control" id="link" ');
  $data['input_texto'] = form_input('texto',set_value('texto',exist_obj($this->info,'texto')),'class="form-control" id="texto" ');

  

    $data['btn_guardar'] = form_submit('btnguardar','Guardar',' id="btnsubmit" class="btn btn-success btn-block"');
    $data['msg']=$this->msg;    
    

    $this->load->view('eventos/v_nuevo',$data);
  }



   public function eliminar(){
      $id= $this->input->post("id");
      if($this->me->eliminarProducto($id)){
        echo 1;
      }else
        echo 0;
   }


}
