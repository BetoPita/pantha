<?php
function isValid(){
		$ins = &get_instance();
		return ($ins->form_validation->run() == FALSE) ? FALSE:TRUE;
	}

	function validar_catalogos(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
	}
	function validar_categoria(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('presentacion', 'presentación', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('categoria', 'categoría', 'xss_clean|is_natural_no_zero');
	}
	function validar_snack(){

		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('descripcion', 'descripción', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('cantidad', 'cantidad', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('precio', 'precio', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('imagen', 'imagen', 'trim|required|xss_clean');
	}
	function validar_postres(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('imagen', 'imagen', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('categoria', 'categoría', 'xss_clean|is_natural_no_zero');
		$ins->form_validation->set_rules('contenido', 'contenido', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('precio', 'precio', 'trim|required|xss_clean|numeric');


	}
	function validar_paqueteria(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('precio', 'precio', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('imagen', 'imagen', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('tiempo', 'tiempo de envío', 'trim|required|xss_clean|numeric');
	}
	function validar_sucursales(){

		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('telefono', 'teléfono', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('calle', 'calle', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('colonia', 'colonia', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('estado', 'estado', 'xss_clean|is_natural_no_zero');
		$ins->form_validation->set_rules('cp', 'C.P.', 'trim|required|xss_clean|numeric');
	}
	function validar_categoria_foto(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('presentacion', 'presentación', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('descripcion', 'descripción', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('imagen', 'imagen', 'trim|required|xss_clean');
	}
	function validar_catalogos_POSTRES(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('descripcion', 'descripción', 'trim|required|xss_clean');
	}

	function validar_catalogos_BEBIDA(){
			$ins = &get_instance();
			$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
			$ins->form_validation->set_rules('imagen', 'imagen', 'trim|required|xss_clean');
		}


	function validar_catalogos_BEBIDAS(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('categoria', 'categoría', 'xss_clean|is_natural_no_zero');
		$ins->form_validation->set_rules('precio', 'precio', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('presentacion', 'presentación', 'trim|required|xss_clean');

	}
	function validar_pizzas(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('precio', 'precio', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('ingrediente', 'ingrediente', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('personas', 'personas', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('tamanio', 'tamaño', 'xss_clean|is_natural_no_zero');
		$ins->form_validation->set_rules('mitad1', 'mitad1', 'xss_clean|is_natural_no_zero');
		$ins->form_validation->set_rules('mitad2', 'mitad2', 'xss_clean|is_natural_no_zero');
	}

		function validar_productos(){

		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('cantidad', 'cantidad', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('descripcion', 'descripción', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('precio', 'precio', 'trim|required|xss_clean|numeric');
		//$ins->form_validation->set_rules('stock', 'stock', 'trim|required|xss_clean|numeric');
		// $ins->form_validation->set_rules('envio', 'envío', 'xss_clean|is_natural_no_zero');
		$ins->form_validation->set_rules('categoria', 'categoria', 'xss_clean|is_natural_no_zero');
		if(isset($_POST['optEnvio'])){
			$ins->form_validation->set_rules('envMin', 'envío mínimo', 'trim|xss_clean|required|numeric|greater_than[0]');
		}

		$ins->form_validation->set_rules('categoria', 'categoria', 'xss_clean|is_natural_no_zero');
		if(isset($_POST['optDesc'])){
			$ins->form_validation->set_rules('desc', 'descuento', 'trim|xss_clean|required|numeric|less_than[101]|greater_than[0]');
		}

	}
	function validar_imagen(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('imagen', 'imagen', 'trim|required|xss_clean');
	}
		function validar_promociones(){

		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('precio', 'precio', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('refrescos', 'refrescos', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('pizzas', 'pizzas', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('postre', 'postre', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('snack', 'snack', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('imagen', 'imagen', 'trim|required|xss_clean');
	}

		function validar_notificacion(){

			$ins = &get_instance();
			$ins->form_validation->set_rules('notificacion', 'Notificación', 'trim|required|xss_clean');

		}

    /*
	* validar formulario de párametros.
    */
    function validar_parametros(){

		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre_empresa', 'Nombre de tu empresa', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('facebook', 'facebook', 'trim|required|xss_clean|valid_url');
		$ins->form_validation->set_rules('twitter', 'twitter', 'trim|required|xss_clean|valid_url');
		$ins->form_validation->set_rules('google', 'google', 'trim|xss_clean|valid_url');
		$ins->form_validation->set_rules('celular', 'teléfono movil', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('telefono', 'teléfono fijo', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('domicilio', 'domicilio', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('correo', 'correo', 'trim|required|valid_email|xss_clean');
		$ins->form_validation->set_rules('lv', 'lunes-viernes', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('sabado', 'sabados', 'trim|required|xss_clean');


	}

	/*
	* valida logo, el logo lo puse aparte por eso lo valido aparte ;)
	*
	*/
	function valida_logo(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('imagen', 'logo', 'trim|required|xss_clean');
	}

	function validar_sesion(){
		$ins = &get_instance();
		if($ins->session->userdata("id") != null)
		   return true;

	}

   /*
	* metodo para obtener el logo.
   */
   function get_logo()
   {
    $CI = &get_instance();
    $CI->db->select('*')
           ->from('parametro');
    $data = $CI->db->get();
    $query = $data->row();
    return $query->logo;
   }

   /*
	* nombre de la empresa.
   */
   function get_nombre_epmresa()
   {
    $CI = &get_instance();
    $CI->db->select('*')
           ->from('parametro');
    $data = $CI->db->get();
    $query = $data->row();
    return $query->nombre_empresa;
   }

   /*
	* validar correo de paypal.
	*
   */
	function valida_paypal(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('correo_paypal', 'logo', 'trim|required|xss_clean');
	}
	function validar_usuario(){
		$ins = &get_instance();
		$ins->form_validation->set_rules('nombre', 'nombre', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('apellido', 'apellido', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|valid_email');
		$ins->form_validation->set_rules('telefono', 'teléfono', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('domicilio', 'domicilio', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('ciudad', 'ciudad', 'trim|required|xss_clean');
		$ins->form_validation->set_rules('cp', 'C.P.', 'trim|required|xss_clean|numeric');
		$ins->form_validation->set_rules('estado', 'estado', 'trim|required|xss_clean');

	}

	function validar_contacto(){
		$ins = &get_instance();
		$ins->form_validation->set_rules("nombre","nombre",'trim|required|xss_clean');
		$ins->form_validation->set_rules("email","email",'trim|required|xss_clean|valid_email');
		$ins->form_validation->set_rules("comentarios","comentarios",'trim|required|xss_clean');
	}


?>
