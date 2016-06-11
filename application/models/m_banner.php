<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**

 **/
class M_banner extends CI_Model{

    /**

     **/
    public function __construct()
    {
        parent::__construct();
    }
    public function getBanner(){
        return $this->db->select("*")
                        ->from("banner")
                        ->order_by('id','asc')
                        ->get()
                        ->result();
    }
    public function guardarBanner($data){
        return $this->db->insert("banner",$data);
    }
    public function getBannerId($id){
        return $this->db->select("*")
                        ->from("banner")
                        ->where("id",$id)
                        ->get()
                        ->result();
    }

    public function ActualizarBanner($data,$id){
        return $this->db->where('id',$id)->update('banner',$data);
          
    }
    public function eliminarBanner($id){
        return $this->db->where('id',$id)->delete("banner");
    }
  
}
		