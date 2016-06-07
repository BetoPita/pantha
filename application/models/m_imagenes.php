<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**

 **/
class M_imagenes extends CI_Model{

    /**

     **/
    public function __construct()
    {
        parent::__construct();
    }
    public function getImagenes(){
        return $this->db->select("*")
                        ->from("imagenes")
                        ->get()
                        ->result();
    }
    public function guardarImagen($data){
        return $this->db->insert("imagenes",$data);
    }
    public function getImagenesId($id){
        return $this->db->select("*")
                        ->from("imagenes")
                        ->where("id",$id)
                        ->get()
                        ->result();
    }

    public function ActualizarImagen($data,$id){
        return $this->db->where('id',$id)->update('imagenes',$data);
          
    }
    public function eliminarBanner($id){
        return $this->db->where('id',$id)->delete("imagenes");
    }
  
}
		