<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	function enviar_correo($correo,$titulo,$cuerpo,$dequien){
		$configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.renovandolaweb.com',
            'smtp_port' => 26,
            'smtp_user' => 'contacto@renovandolaweb.com',
            'smtp_pass' => 'contacto007',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );
		$CI = & get_instance();
		$CI->email->initialize($configGmail);
		$CI->email->from($dequien, 'Homeopatía Renal');
		$CI->email->to($correo);
        //si quieres que te envíen una copia a otro correo descomenta abajo y ponlo
		//$CI->email->cc('desquivel91@gmail.com');
		$CI->email->subject($titulo);
		$CI->email->message($cuerpo);
		$CI->email->send();
		//var_dump($CI->email->print_debugger());
	}
	/************Fin correo_helper.php*********************/