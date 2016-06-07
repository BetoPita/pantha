<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**

 **/
class M_promocion extends CI_Model{

    /**

     **/
    public function __construct()
    {
        parent::__construct();
    }
  
    public function guardarPromocion($data){
        return $this->db->insert("promocion",$data);
    }
    public function getPromocion(){
      return $this->db->select("*")
                      ->from("promocion")
                      ->order_by('titulo')
                      ->where('status',1)
                      ->get()
                      ->result();
    }
    public function getPromocionId($id){
        return $this->db->select("*")
                        ->from("promocion")
                        ->where('status',1)
                        ->where("id",$id)
                        ->get()
                        ->result();
    }

    public function actualizarPromocion($data,$id){
        return $this->db->where('id',$id)->update('promocion',$data);
    }
    public function eliminarPromocion($id){
        return $this->db->where('id',$id)->set('status',0)->update("promocion");
    }



}
