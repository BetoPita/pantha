<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promocion extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       $this->load->model("M_promocion","mp");
       $this->msg=$this->session->flashdata('msg');
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           


	public function index(){
     if(validar_sesion()){

        $data['promocion'] = $this->mp->getPromocion();
        $this->load->view('promocion/v_promocion',$data);

        }else{

          $error['texto']="Favor de iniciar sesión";
          $this->load->view('login/login',$error);
         }



	}
  function agregar()
  {
    $id=$this->input->get("id");
    if($this->input->post() != ''){   
      $this->form_validation->set_rules('titulo', 'titulo', 'trim|required|xss_clean');
      $this->form_validation->set_rules('destino', 'destino', 'trim|required|xss_clean');
      $this->form_validation->set_rules('precio', 'precio', 'trim|required|xss_clean');
      if (empty($_FILES['imagen']['name']) && $id==0)
      {
          $this->form_validation->set_rules('imagen', 'imagen', 'required');
      }
    
      if ($this->form_validation->run()){ 
          $carpeta="statics/img/promociones/";

           if($id==0){  
              $dataimg=subirImg($carpeta,'3000','3000',$_FILES['imagen']['name'],'imagen');
              $renombrado=$dataimg['file_path'].uniqid().$dataimg['file_ext'];
              rename($dataimg['full_path'],$renombrado) ;
              DimensionarImg($renombrado,'192','192',$dataimg['file_path'].$dataimg['file_name']);
          
              if(file_exists($renombrado)){
                unlink($renombrado);
              }

              if (!empty($_FILES['pdf']['name']))
              {
                  $dataarchivo=subirImg($carpeta,'3000','3000',$_FILES['pdf']['name'],'pdf');
              }
              
              if (!file_exists($carpeta)) {
                  mkdir($carpeta, 0777, true);
              }

             $datos = array('titulo' =>$this->input->post("titulo"),
                      'destino'=>$this->input->post("destino"),
                      'precio'=>$this->input->post("precio"),
                      'imagen'=>$carpeta.$dataimg['raw_name'].$dataimg['file_ext'],
                      'path'=>$dataimg['full_path'],    
                      'pdf'=> (empty($_FILES['pdf']['name']))?'':$carpeta.$dataarchivo['raw_name'].$dataarchivo['file_ext']
                      );
                       
              if($this->mp->guardarPromocion($datos)) {
                $idpaciente=$this->db->insert_id();    
                  $this->session->set_flashdata('msg', 'Registro guardado correctamente.');
                  redirect('promocion/index');
                   
              }else{
                $this->form_validation->msg = 'El registro no se guardo, intente otra vez.';  
                
              }
            }else{
              if (!empty($_FILES['imagen']['name']))
              {
                 $dataimg=subirImg($carpeta,'3000','3000','','imagen');
                 $renombrado=$dataimg['file_path'].uniqid().$dataimg['file_ext'];
                  rename($dataimg['full_path'],$renombrado) ;
                  DimensionarImg($renombrado,'192','192',$dataimg['file_path'].$dataimg['file_name']);
              
                  if(file_exists($renombrado)){
                    unlink($renombrado);
                  }
                 $img_guardar=$carpeta.$dataimg['raw_name'].$dataimg['file_ext'];
                 $path=$dataimg['full_path'];
              }else{
                $img_guardar=$this->input->post('img');
                $path='';
              }


              if (!empty($_FILES['pdf']['name']))
              {
                 $dataarchivo=subirImg($carpeta,'3000','3000','','pdf');
                 $archivo_guardar=$carpeta.$dataarchivo['raw_name'].$dataarchivo['file_ext'];
              }else{
                $archivo_guardar=$this->input->post('pdf_save');
              }
                 $datos = array('titulo' =>$this->input->post("titulo"),
                      'destino'=>$this->input->post("destino"),
                      'precio'=>$this->input->post("precio"),
                      'imagen'=>$img_guardar,
                      'path'=>$path,    
                      'pdf'=> $archivo_guardar,    
                      );

                
              if($this->mp->actualizarPromocion($datos,$id)) {
                $this->session->set_flashdata('msg', 'Guardado correctamente.');
                    redirect('promocion/index');
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
      $this->imagen='';
      $this->pdf='';
      
    }else{
      $this->info= $this->mp->getPromocionId($id);
      $this->info=$this->info[0];
      $this->id=$this->info->id;
      $this->imagen=$this->info->imagen;
      $this->pdf=$this->info->pdf;
    }
    //print_r($this->info);die();


    $data['input_id'] = $this->id;
    $data['input_titulo'] = form_input('titulo',set_value('titulo',exist_obj($this->info,'titulo')),'class="form-control" id="titulo" ');
    $data['input_destino'] = form_input('destino',set_value('destino',exist_obj($this->info,'destino')),'class="form-control" id="destino" ');
    $data['input_precio'] = form_input('precio',set_value('precio',exist_obj($this->info,'precio')),'class="form-control cantidad" id="precio" ');
    
    
    $data['btn_guardar'] = form_submit('btnguardar','Guardar',' id="btnsubmit" class="btn btn-success btn-block"');
    $data['msg']=$this->msg;    
    $data['imagen']=$this->imagen;
    $data['pdf']=$this->pdf;
    


    $this->load->view('promocion/v_nuevo',$data);
  }

   public function eliminar(){
      $id= $this->input->post("id");
      if($this->mp->eliminarPromocion($id)){
        echo 1;
      }else
        echo 0;
   }


}
