<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**

 **/
class M_evento extends CI_Model{

    /**

     **/
    public function __construct()
    {
        parent::__construct();
    }
  
    public function guardarEvento($data){
        return $this->db->insert("evento",$data);
    }
    public function getEvento(){
      return $this->db->select("*")
                      ->from("evento")
                      ->get()
                      ->result();
    }
    public function getEventoId($id){
        return $this->db->select("*")
                        ->from("evento")
                        ->where("id",$id)
                        ->get()
                        ->result();
    }    

    public function actualizarEvento($data,$id){
        return $this->db->where('id',$id)->update('evento',$data);
    }
    public function eliminarProducto($id){
        return $this->db->where('id',$id)->delete("evento");
    }



}
