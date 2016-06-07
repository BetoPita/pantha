<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imagenes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       $this->load->model("M_imagenes","mi");
    }

       /*
  Descripción: Obtiene los ingredientes registrados en la base de datos.
  * Regresa: ingredientes
  * Parámetros : ninguno
  * Autor : Luis Alberto Pita Vázquez

  */
	
	public function index(){
    if(validar_sesion()){ 
      $data['imagenes'] = $this->mi->getImagenes();
      $this->load->view('imagenes/v_imagenes',$data);

    }else{

      $error['texto']="Favor de iniciar sesión";
      $this->load->view('login/login',$error);
     }  

	}

  /*
  Descripción: muestra la ventana para agregar ingredientes
  * Regresa: nada
  * Parámetros : ninguno
  * Autor : Luis Alberto Pita Vázquez

  */


  public function nuevo(){
    
    $this->load->view("imagenes/v_nuevo");
  }
  
   /*
  Descripción: Agrega categorías a la base de datos
  * Regresa: id del ingrediente
  * Parámetros : nombre
  * Autor : Luis Alberto Pita Vázquez

  */

public function agregar(){
    $carpeta = 'statics/img/footer/';
      if (!file_exists($carpeta)) {
          mkdir($carpeta, 0777, true);
      }
  
  $dataimg=subirImg($carpeta,'3000','3000','','imagen');
  $renombrado=$dataimg['file_path'].uniqid().$dataimg['file_ext'];
  rename($dataimg['full_path'],$renombrado) ;
  DimensionarImg($renombrado,'149','85',$dataimg['file_path'].$dataimg['file_name']);
  
  if(file_exists($renombrado)){
    unlink($renombrado);
  }
  
    $imagenName=$dataimg['raw_name'];
    $extension=$dataimg['file_ext'];
    $path=$dataimg['full_path']; 
  
  $datos = array('link' =>$this->input->post('link') , 
                'imagen' =>$carpeta. $imagenName.$extension , 
                'path' =>$path,

    );
   if($this->mi->guardarImagen($datos))
         {
          $reg=$this->db->insert_id();
          $this->session->set_flashdata('msg', 'Registro guardado correctamente');
            redirect('imagenes');
         } 
         else{
           $this->session->set_flashdata('msg', 'El registro no se guardo, intenta de nuevo');
            redirect('imagenes');
         }
          
}


     /*
  Descripción: muestra la ventana para editar ingredientes
  * Regresa: nada
  * Parámetros : id del ingrediente
  * Autor : Luis Alberto Pita Vázquez

  */


   public function editar(){
    $datos['imagenes']= $this->mi->getImagenesId($this->input->get('id'));
    $this->load->view("imagenes/v_editar",$datos);

   }

    /*
  Descripción: actualiza lis ingredientes de la base de datos
  * Regresa: 1 correcto, 0 incorrecto
  * Parámetros :id del ingrediente 
  * Autor : Luis Alberto Pita Vázquez

  */

     public function actualizar_sinfoto(){

      $datos = array('link' =>$this->input->post('link')
      );
      $id=$this->input->post("id");

             if($this->mi->ActualizarImagen($datos,$id))
             {
               $this->session->set_flashdata('msg', 'Registro guardado correctamente');
               redirect('imagenes');
             } 
             else
            {
             $this->session->set_flashdata('msg', 'El registro no se guardo, intenta de nuevo');
              redirect('imagenes');
            }
   }

   public function actualizar(){

      $carpeta = 'statics/img/footer/';
      
      if (!file_exists($carpeta)) {
          mkdir($carpeta, 0777, true);
      }
      $dataimg=subirImg($carpeta,'3000','3000','','imagen');
      $renombrado=$dataimg['file_path'].uniqid().$dataimg['file_ext'];
      rename($dataimg['full_path'],$renombrado) ;
      DimensionarImg($renombrado,'149','85',$dataimg['file_path'].$dataimg['file_name']);
  
      if(file_exists($renombrado)){
        unlink($renombrado);
      }
      $imagenName=$dataimg['raw_name'];
      $extension=$dataimg['file_ext'];
     $datos = array('link' =>$this->input->post('link') , 
                  'imagen' =>$carpeta. $imagenName.$extension , 
                  'path' =>$dataimg['full_path']

      );

      $id=$this->input->post("id");
     if($this->mi->ActualizarImagen($datos,$id))
             {
             // print_r($this->db->last_query());die();
              if(file_exists ($this->input->post('ruta'))){
                unlink($this->input->post('ruta')); //borra la imagen anterior
              }
              
               $this->session->set_flashdata('msg', 'Registro guardado correctamente');
               redirect('imagenes');
             } 
             else
            {
             $this->session->set_flashdata('msg', 'El registro no se guardo, intenta de nuevo');
              redirect('imagenes');
            }

   }



     /*
  Descripción: elimina los ingredientes de la base de datos
  * Regresa: 1 correcto, 0 incorrecto
  * Parámetros :id del ingrediente 
  * Autor : Luis Alberto Pita Vázquez

  */

   public function eliminar(){
      $id= $this->input->post("id");
      if($this->mi->eliminarBanner($id)){   
        echo 1;
      }else 
        echo 0;
   }


    
}
