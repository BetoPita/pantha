<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**

 **/
class M_login extends CI_Model{

    /**

     **/
    public function __construct()
    {
        parent::__construct();
    }
    
    public function login($correo,$password){
        return $this->db->where('correo',$correo)
                        ->where('password',$password)
                        ->get('admin')
                        ->row();
    }
  
}
		