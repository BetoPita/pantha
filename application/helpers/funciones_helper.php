<?php
/**
* Contains several function of commun use on PHP projects
* @version 1.0
* @copyright Copyright (c) 2016, renovandolaweb.com
* @since 08-Enero-2016
*/

/**
  * Función que imprime un array de forma "bonita"
  * @param $array = se tiene que recibir un array
  * @return El array impreso en con <pre>
  * @author Daniel Esquivel
  */
  function printArray($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
  }

  /**
  * Función que regresa la fecha en formato dd/mm/aaaa
  * @param $fecha = una fecha en formato aaaa-mm-dd
  * @return la fecha en formato dd/mm/aaaa
  * @author Daniel Esquivel
  */
  function fechaNormal($fecha){
    $fechaExp = explode("-",$fecha);
    $newDate = $fechaExp[2].'/'.$fechaExp[1].'/'.$fechaExp[0];
    return $newDate;
  }

  /**
  * Función que regresa la fecha en formato aaaa-mm-dd
  * @param $fecha = una fecha en formato dd/mm/aaaa
  * @return la fecha en formato aaaa-mm-dd
  * @author Daniel Esquivel
  */
  function fechaSQL($fecha){
    $fechaExp = explode("/",$fecha);
    $newDate = $fechaExp[2].'-'.$fechaExp[1].'-'.$fechaExp[0];
    return $newDate;
  }

  /**
  *Función que genera una cadena aleatoria
  * @param $length = (Númerico) longitud de la cadena,
  * @param $uc (Boleano) = Si contiene o no letras
  * @param $n (Boleano) = Si contiene o no números
  * @param $sc (Boleano) = Si contiene o no carácteres especiales
  * @return la fecha en formato aaaa-mm-dd
  * @author Daniel Esquivel.
  */
  function RandomString($length=10,$uc=TRUE,$n=TRUE,$sc=FALSE){
    $source = 'abcdefghijklmnopqrstuvwxyz';
    if($uc==1) $source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if($n==1) $source .= '1234567890';
    if($sc==1) $source .= '|@#~$%()=^*+[]{}-_';
      if($length>0){
          $codigo = "";
          $max  = strlen($source) - 1;
          for($i=1; $i<=$length; $i++){
            $generar_codigo = mt_rand(1, $max);
            $codigo.=$source[$generar_codigo-1];
          }
      }
    return $codigo;
  }
  /**
  * Regresa sub string sin etiquetas HTML y puntos suspensivos al final
  * @param $string String
  * @param $length Largo que queremos el substring
  * @return String con ...
  * @author Daniel Esquivel.
  */

  function getSubString($string, $length=NULL){
      //Si no se especifica la longitud por defecto es 50
      if ($length == NULL)
          $length = 50;
      //Primero eliminamos las etiquetas html y luego cortamos el string
      $stringDisplay = substr(strip_tags($string), 0, $length);
      //Si el texto es mayor que la longitud se agrega puntos suspensivos
      if (strlen(strip_tags($string)) > $length)
          $stringDisplay .= ' ...';
      return $stringDisplay;
  }
  /**
  * Regresa la contraseña cifrada
  * @param $password String
  * @return Password cifrada con md5 y sha1
  * @author Daniel Esquivel.
  */
  function EncryPass($password){
    return md5(sha1($password));
  }
  function getRealIpAddr(){
  	if (!empty($_SERVER['HTTP_CLIENT_IP']))
  	{
  		$ip=$_SERVER['HTTP_CLIENT_IP'];
  	}
  	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  	//to check ip is pass from proxy
  	{
  		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  	}
  	else
  	{
  		$ip=$_SERVER['REMOTE_ADDR'];
  	}
  	return $ip;
  }
  function getRemoteIPAddress() {
    $ip = $_SERVER['REMOTE_ADDR'];
    return $ip;
  }
  /**
  * Regresa el estado de un registro
  * @param $password String
  * @return 1= Activo y 0 = Inactivo
  * @author Daniel Esquivel.
  */
  function estado($estado){
    if($estado == 1){
      return "Activo";
    }else{
      return "Inactivo";
    }
  }
  /**
  * Regresa el rol de un usuarios
  * @param $rol String
  * @return 1= Admin y 2= User
  * @author Daniel Esquivel.
  */
  function rol($rol){
    if($rol == 1){
      return "Administrador";
    }else{
      return "User";
    }
  }
  function partition( $list, $p ) {
    $listlen = count( $list );
    $partlen = floor( $listlen / $p );
    $partrem = $listlen % $p;
    $partition = array();
    $mark = 0;
    for ($px = 0; $px < $p; $px++) {
        $incr = ($px < $partrem) ? $partlen + 1 : $partlen;
        $partition[$px] = array_slice( $list, $mark, $incr );
        $mark += $incr;
    }
    return $partition;
  }

  function precio($desc, $precio, $cantidad_des, $cantidad){
    if($desc == 1){
      $des = $cantidad_des/100;
      $des = $precio * $des;
      return $total = ($precio-$des)*$cantidad;
    }else{
      return $total = $precio*$cantidad;
    }

  }
  function mes($mes){
    if($mes==1){
      return 'Ene';
    }else if($mes==2){
      return 'Feb';
    }else if($mes==3){
      return 'Mar';
    }else if($mes==4){
      return 'Abr';
    }else if($mes==5){
      return 'May';
    }else if($mes==6){
      return 'Jun';
    }else if($mes==7){
      return 'Jul';
    }else if($mes==8){
      return 'Ago';
    }else if($mes==9){
      return 'Sep';
    }else if($mes==10){
      return 'Oct';
    }
    else if($mes==11){
      return 'Nov';
    }else if($mes==12){
      return 'Dic';
    }
  }
?>
