<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banner extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       $this->load->model("M_banner","mb");
    }

	public function index(){
    if(validar_sesion()){ 
      $data['banner'] = $this->mb->getBanner();
      $this->load->view('banner/v_banner',$data);

    }else{
      $error['texto']="Favor de iniciar sesión";
      $this->load->view('login/login',$error);
     }  

	}
  public function nuevo(){
    
    $this->load->view("banner/v_nuevo");
  }
  
public function agregar(){
  //falta validar lo de la imagen si llega vacia y que no haya dos categorias con el mismo nombre
    $carpeta = 'statics/img/banner/';
      if (!file_exists($carpeta)) {
          mkdir($carpeta, 0777, true);
      }
  
  $dataimg=subirImg($carpeta,'3000','3000','','imagen');
  $renombrado=$dataimg['file_path'].uniqid().$dataimg['file_ext'];
  rename($dataimg['full_path'],$renombrado) ;
  DimensionarImg($renombrado,'1179','2368',$dataimg['file_path'].$dataimg['file_name']);
  
  if(file_exists($renombrado)){
    unlink($renombrado);
  }
  
   $imagenName=$dataimg['raw_name'];
    $extension=$dataimg['file_ext'];
    $path=$dataimg['full_path']; 
  /*if($this->input->post('imagen')!=''){
    $dataimg=subirImg($carpeta,'3000','3000','','imagen');
     $imagenName=$dataimg['raw_name'];
    $extension=$dataimg['file_ext'];
    $path=$dataimg['full_path'];
  }else{
    $imagenName='';
    $extension='';
    $path='';
  }*/ 
    
 // print_r($dataimg);die();
  $datos = array('imagen' =>$carpeta. $imagenName.$extension , 
                'path' =>$path

    );
   if($this->mb->guardarBanner($datos))
         {
          $reg=$this->db->insert_id();
          $this->session->set_flashdata('msg', 'Registro guardado correctamente');
            redirect('banner');
         } 
         else{
           $this->session->set_flashdata('msg', 'El registro no se guardo, intenta de nuevo');
            redirect('banner');
         }
          
}



 public function editar(){
  $datos['banner']= $this->mb->getBannerId($this->input->get('id'));
  $this->load->view("banner/v_editar",$datos);

 }

    /*
  Descripción: actualiza lis ingredientes de la base de datos
  * Regresa: 1 correcto, 0 incorrecto
  * Parámetros :id del ingrediente 
  * Autor : Luis Alberto Pita Vázquez

  */

     public function actualizar_sinfoto(){
       if($this->input->post("check_menu")!=null){
        $menu=1;
      }else{
        $menu=0;
      }
       $datos = array('nombre' =>$this->input->post('nombre') , 
                'descripcion' =>$this->input->post('descripcion'),
                'menu'=>$menu 

      );
      $idcategoria=$this->input->post("idcategoria");

             if($this->mb->ActualizarCategoria($datos,$idcategoria))
             {
               $this->session->set_flashdata('msg', 'Registro guardado correctamente');
               redirect('categoriaspa');
             } 
             else
            {
             $this->session->set_flashdata('msg', 'El registro no se guardo, intenta de nuevo');
              redirect('categoriaspa');
            }
   }

   public function actualizar(){

      $carpeta = 'statics/img/banner/';
      
      if (!file_exists($carpeta)) {
          mkdir($carpeta, 0777, true);
      }
      $dataimg=subirImg($carpeta,'3000','3000','','imagen');
      $renombrado=$dataimg['file_path'].uniqid().$dataimg['file_ext'];
      rename($dataimg['full_path'],$renombrado) ;
      DimensionarImg($renombrado,'1179','2368',$dataimg['file_path'].$dataimg['file_name']);
  
      if(file_exists($renombrado)){
        unlink($renombrado);
      }
     $datos = array('imagen' =>$carpeta.$dataimg['file_name'] , 
                  'path' =>$dataimg['full_path'],

      );

      $id=$this->input->post("id");
     if($this->mb->ActualizarBanner($datos,$id))
             {
              if(file_exists ($this->input->post('ruta'))){
                unlink($this->input->post('ruta')); //borra la imagen anterior
              }
              
               $this->session->set_flashdata('msg', 'Registro guardado correctamente');
               redirect('banner');
             } 
             else
            {
             $this->session->set_flashdata('msg', 'El registro no se guardo, intenta de nuevo');
              redirect('banner');
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
      if($this->mb->eliminarBanner($id)){   
        echo 1;
      }else 
        echo 0;
   }


    
}
