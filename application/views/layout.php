<?php
	require_once("ini_layout.php");
	$rand = rand(0,99);
	$db = Db::getInstance();
	$arreglo_banners = $db->ejecutar('SELECT * FROM banner ORDER BY id_banner ASC');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html ng-app class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html ng-app class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html ng-app class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html ng-app class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Pantha</title>
        <meta name="description" content="" />
	<meta name="author" content="" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width" />
	
	
	<meta property="og:title" content="Pantha Travel" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="http://panthatravel.com/" />
        <meta property="og:image" content="http://panthatravel.com/img/logo.png" />
        <meta property="og:description" content="" />
        
        
        <meta name="twitter:card" content="" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:creator" content="" />
        <meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
        <meta name="twitter:image" content="http://panthatravel.com/img/logo.png" />
	
	
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css' />
	
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
        <link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="fonts/stylesheet.css" />
        <link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/text.css" />
	<link rel="stylesheet" href="css/960.css" />
        <link rel="stylesheet" href="css/estilos.css?<? echo $rand; ?>" />
        <link rel="stylesheet" href="css/carousel.css">
	
	<link rel="stylesheet" href="css/estilos_promociones.css" />
	<link rel="stylesheet" href="css/estilos_eventos.css" />
		
	<!-- Popup -->
	<link rel="stylesheet" href="css/prettyPhoto.css" />
	<!-- Skitter -->
	<link rel="stylesheet" href="css/skitter.styles.css" />
	<!-- Vegas Background -->
	<link rel="stylesheet" href="css/jquery.vegas.css" />
	<!-- Bx Background -->
	<link rel="stylesheet" href="css/jquery.bxslider.css" />
	
        <script src="js/lib/modernizr-2.6.2.min.js"></script>
        <!-- include jQuery + carouFredSel plugin -->
        
        
    </head>
    <script>
(function(a){if(typeof define==='function'&&define.amd){define(['jquery'],a)}else{a(jQuery)}}(function($){if($.support.cors||!$.ajaxTransport||!window.XDomainRequest){return}var n=/^https?:\/\//i;var o=/^get|post$/i;var p=new RegExp('^'+location.protocol,'i');$.ajaxTransport('* text html xml json',function(j,k,l){if(!j.crossDomain||!j.async||!o.test(j.type)||!n.test(j.url)||!p.test(j.url)){return}var m=null;return{send:function(f,g){var h='';var i=(k.dataType||'').toLowerCase();m=new XDomainRequest();if(/^\d+$/.test(k.timeout)){m.timeout=k.timeout}m.ontimeout=function(){g(500,'timeout')};m.onload=function(){var a='Content-Length: '+m.responseText.length+'\r\nContent-Type: '+m.contentType;var b={code:200,message:'success'};var c={text:m.responseText};try{if(i==='html'||/text\/html/i.test(m.contentType)){c.html=m.responseText}else if(i==='json'||(i!=='text'&&/\/json/i.test(m.contentType))){try{c.json=$.parseJSON(m.responseText)}catch(e){b.code=500;b.message='parseerror'}}else if(i==='xml'||(i!=='text'&&/\/xml/i.test(m.contentType))){var d=new ActiveXObject('Microsoft.XMLDOM');d.async=false;try{d.loadXML(m.responseText)}catch(e){d=undefined}if(!d||!d.documentElement||d.getElementsByTagName('parsererror').length){b.code=500;b.message='parseerror';throw'Invalid XML: '+m.responseText;}c.xml=d}}catch(parseMessage){throw parseMessage;}finally{g(b.code,b.message,c,a)}};m.onprogress=function(){};m.onerror=function(){g(500,'error',{text:m.responseText})};if(k.data){h=($.type(k.data)==='string')?k.data:$.param(k.data)}m.open(j.type,j.url);m.send(h)},abort:function(){if(m){m.abort()}}}})}));
    
    jQuery.ajax({
        type: "post",
        url: "http://www.e-tsw.com/Search/Box?af=AF-MGI&ln=&cu=",
        success: function (data) {
            jQuery("#liquidBoxContainer").html(data);
        }
    });
</script>
    <body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
        <!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
	
	<header id="header">
		<div id="cuadrito-negro" class="alinear">
			<div id="cursor"></div>
		</div>
		<nav id="botonera" class="alinear">
			<ul>
				<li id="menu-inicio"><a href="index.php">Inicio</a></li>
				<li id="menu-promociones"><a href="promociones.php">Promociones</a></li>
				<li id="menu-metal-eventos"><a href="metal-eventos.php">Metal Eventos</a></li>
				<li id="menu-contacto"><a href="contacto.php">Contacto</a></li>
			</ul>
		</nav>
		<div class="fb-like" data-href="http://panthatravel.com/" data-layout="standard" data-action="like" data-show-faces="false" data-share="true" data-width="200" ></div>
		<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="250" data-href="http://panthatravel.com/"></div>
	</header>
	<script type="text/javascript">
  window.___gcfg = {lang: 'es'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
	
	<div id="main" role="main">
		
		<?php emptyblock('seccion'); ?>
		
	</div>
	
	<footer>
		<div id="footer-contenedor" class="">
			<div class="footer-elemento slider1">
				<? foreach($arreglo_banners AS $fila){ ?>
				<div class="slide"><a href="<? echo $fila['link']; ?>" target="_blank"><img src="imagenes/banner/main/<? echo $fila['imagen']; ?>" alt="<? echo $fila['marca']; ?>" /></a></div>
				<? } ?>
			</div>
		</div>
	</footer>

        <script src="js/lib/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/lib/jquery.bxslider.min.js"></script>
	<script src="js/lib/angular.min.js"></script>
	<script src="js/lib/prefixfree.min.js"></script>
	<script src="js/lib/script_funciones.js"></script><!-- convierte xml -->
	<script src="js/lib/validaciones.js"></script>
	
	<!-- Popup -->
	<script src="js/lib/jquery.prettyPhoto.js"></script>
	<!-- Animate Scroll -->
	<script src="js/lib/animatescroll.js"></script>
	<script src="js/lib/animatescroll.noeasing.js"></script>
	<!-- Skitter -->
	<script src="js/lib/jquery.easing.1.3.js"></script>
	<script src="js/lib/jquery.skitter.min.js"></script>
	<!-- Vegas Background -->
	<script src="js/lib/jquery.vegas.js"></script>
	
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

	<?php emptyblock('scripts'); ?>
	
	
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
