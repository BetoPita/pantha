<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getRandomProd(){
      $query = $this->db->query("SELECT vp.* , c.nombre as categoria FROM v_productoprincipal AS vp JOIN categoria AS c ON vp.idcategoria = c.idcategoria ORDER BY RAND() LIMIT 8");
  		return $query->result();
    }
    public function getNewProd(){
      $query = $this->db->query("SELECT vp.* , c.nombre as categoria FROM v_productoprincipal AS vp JOIN categoria AS c ON vp.idcategoria = c.idcategoria ORDER BY idproducto desc LIMIT 4");
  		return $query->result();
    }
    public function getCategorias(){
        return $this->db->select('*')
                        ->from('categoria')
                        ->where('menu',1)
                        ->get()
                        ->result();
    }
    public function getParametros(){
        return $this->db->select('*')
                        ->from('parametro')
                        ->get()
                        ->result();
    }
  public function record_count(){
		return $this->db->count_all("v_productoprincipal");
	}
  public function get_productoPrincipal($limit,$start){
		$this->db->limit($limit,$start);
		$query = $this->db->get("v_productoprincipal");
		$last = $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }
    return false;

	}
  public function get_producto($limit,$start,$id){
		$this->db->limit($limit,$start);
		$query = $this->db->where('idcategoria',$id)->get("v_productoprincipal");
		$last = $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }
    return false;
	}

	public function record_count_cate($id){
		$query = $this->db->where('idcategoria',$id)->get('v_productoprincipal');
		return $query->num_rows();
	}

  public function getProducto($idproducto){
    return $this->db->select('*')
                    ->from('productos')
                    ->where('idproducto',$idproducto)
                    ->get()
                    ->result();
  }

  public function getImagnes($idProd){
    return $this->db->select('*')
                    ->from('imagenes')
                    ->where('idproducto',$idProd)
                    ->get()
                    ->result();
  }
  public function getTodoCarrito($pedido){
		return $this->db->select('idtransaccion,c.cantidad,c.idproducto,precio,url,nombre,idcarrito,max,descuento,cantidad_descuento, tipo_envio,cantidad_envio')
						->from('carrito c')
						->join('v_productoprincipal p','c.idproducto=p.idproducto')
						->where('idtransaccion',$pedido)
						->get()
						->result();
	}
	public function totalCarrito($pedido = 0){
		if($pedido == ""){
			$pedido = 0;
		}
		$query = $this->db->query('Select sum(cantidad) as total from carrito where idtransaccion = '.$pedido."");
		return $query->result();
	}

  public function addCarrito($datos){
		return $this->db->insert('carrito',$datos);
	}
	public function buscarCarrito($id,$tans){
		return $this->db->select('*')
						->from('carrito')
						->where('idproducto',$id)
						->where('idtransaccion',$tans)
						->get()
						->result();
	}
	public function updateCarrito($id,$can,$pedido){
		return $this->db->set('cantidad',$can)->where('idproducto',$id)->where('idtransaccion',$pedido)->update('carrito');
	}
	public function updateCarritos($idcarrito,$cantidad){
		return $this->db->where("idcarrito",$idcarrito)->set("cantidad",$cantidad)->update("carrito");
	}
  public function getPaqueteria(){
    return $this->db->select('*')
                    ->from('paqueteria')
                    ->where('estado',1)
                    ->get()
                    ->result();
  }
  public function getParametos(){
		return $this->db->select('*')
						->from('parametro')
						->get()
						->result();
	}
  public function insertUsuario($data){
		return $this->db->insert("usuarios",$data);
	}
  public function insertVenta($datos_venta){
		return $this->db->insert("venta",$datos_venta);
	}
  public function getCarrito($idtransaccion){
		return $this->db->select('*')
						->from('carrito')
						->where("idtransaccion",$idtransaccion)
						->get()
						->result();
	}
  public function insertVentaCarrito($cantidad,$idproducto,$id_venta){
		return $this->db->set("idventa",$id_venta)->set("cantidad",$cantidad)->set("idproducto",$idproducto)->insert("venta_producto");
	}

	public function deleteCarrito($idpedido){
		return $this->db->where("idtransaccion",$idpedido)->delete("carrito");
	}
  public function getProductoVenta($idVenta){
    $query = $this->db->query("SELECT vp.*, vpp.*, paq.nombre as nomPaq, paq.precio as paqPrecio, u.domicilio, u.ciudad, u.estado, u.cp, u.nombre as usuario, ".
                               " v.total, v.descripcion as ventaDes, v.idventa as folio FROM venta_producto vp".
                               " join productos p on vp.idproducto = p.idproducto join venta as v on vp.idventa = v.idventa join paqueteria as paq on v.idpaqueteria = paq.idpaqueteria" .
                               " join usuarios as u on v.idusuario = u.idusuario join v_productoprincipal vpp on p.idproducto = vpp.idproducto where v.idventa = ".$idVenta);
    return $query->result();
  }
  public function updateVenta($idventa){
    return $this->db->where('idventa',$idventa)->set('estatus',2)->update('venta');
  }
  public function getVentaProd($idVenta){
    return $this->db->select('idventa,c.cantidad,c.idproducto,precio,url,nombre,max,descuento,cantidad_descuento,tipo_envio,cantidad_envio')
        						->from('venta_producto c')
        						->join('v_productoprincipal p','c.idproducto=p.idproducto')
        						->where('idventa',$idVenta)
        						->get()
        						->result();
  }

  public function updateProducto($idProducto,$cantidad){
    return $this->db->where('idproducto',$idProducto)->set('cantidad',$cantidad)->update('productos');
  }
}
