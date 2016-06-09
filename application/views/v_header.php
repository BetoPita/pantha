<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
  <base href="<?php echo base_url(); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="4studio" />    
    <meta name="google" content="notranslate" />

	
	<link rel="stylesheet" href="assets/css/bootstrap.css"> 
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
  <link href="assets/css/full-slider.css" rel="stylesheet">

  
  <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="statics/js/autoNumeric.js" charset="UTF-8"></script>
  <script type="text/javascript" src="statics/js/jquery.numeric.js" charset="UTF-8"></script>
 
	<title>Pantha</title>
</head>

<!--<script>
(function(a){if(typeof define==='function'&&define.amd){define(['jquery'],a)}else{a(jQuery)}}(function($){if($.support.cors||!$.ajaxTransport||!window.XDomainRequest){return}var n=/^https?:\/\//i;var o=/^get|post$/i;var p=new RegExp('^'+location.protocol,'i');$.ajaxTransport('* text html xml json',function(j,k,l){if(!j.crossDomain||!j.async||!o.test(j.type)||!n.test(j.url)||!p.test(j.url)){return}var m=null;return{send:function(f,g){var h='';var i=(k.dataType||'').toLowerCase();m=new XDomainRequest();if(/^\d+$/.test(k.timeout)){m.timeout=k.timeout}m.ontimeout=function(){g(500,'timeout')};m.onload=function(){var a='Content-Length: '+m.responseText.length+'\r\nContent-Type: '+m.contentType;var b={code:200,message:'success'};var c={text:m.responseText};try{if(i==='html'||/text\/html/i.test(m.contentType)){c.html=m.responseText}else if(i==='json'||(i!=='text'&&/\/json/i.test(m.contentType))){try{c.json=$.parseJSON(m.responseText)}catch(e){b.code=500;b.message='parseerror'}}else if(i==='xml'||(i!=='text'&&/\/xml/i.test(m.contentType))){var d=new ActiveXObject('Microsoft.XMLDOM');d.async=false;try{d.loadXML(m.responseText)}catch(e){d=undefined}if(!d||!d.documentElement||d.getElementsByTagName('parsererror').length){b.code=500;b.message='parseerror';throw'Invalid XML: '+m.responseText;}c.xml=d}}catch(parseMessage){throw parseMessage;}finally{g(b.code,b.message,c,a)}};m.onprogress=function(){};m.onerror=function(){g(500,'error',{text:m.responseText})};if(k.data){h=($.type(k.data)==='string')?k.data:$.param(k.data)}m.open(j.type,j.url);m.send(h)},abort:function(){if(m){m.abort()}}}})}));
    
    jQuery.ajax({
        type: "post",
        url: "http://www.e-tsw.com/Search/Box?af=AF-MGI&ln=&cu=",
        success: function (data) {
            jQuery("#liquidBoxContainer").html(data);
        }
    });
</script> -->
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<nav class="navbar navbar-default header navbar-fixed-top ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
           <img id="negro" src="assets/img/mano.png"></img> 

    </div>
   
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse m-t-10" id="bs-example-navbar-collapse-1">
  <!-- <div class="fb-like" data-href="https://www.facebook.com/PanthaTravel/?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>-->

      <ul class="nav navbar-nav ul-margen">
        <li id="cuadro-negro"></li>
        <li class="<?php echo ($this->session->userdata('menu')=='Inicio')?'active_menu':'' ?>"><a class="label-menu" href="#">Inicio</a></li>
      	<li class="<?php echo ($this->session->userdata('menu')=='promociones')?'active_menu':'' ?>"><a class="label-menu" class="salto" href="<?php echo site_url('inicio/promociones') ?>">Promociones</a></li>
       	<li class="<?php echo ($this->session->userdata('menu')=='metal')?'active_menu':'' ?>"><a class="label-menu" class="salto" href="<?php echo site_url('inicio/eventos') ?>">Metal Eventos</a></li>
        <li class="<?php echo ($this->session->userdata('menu')=='contacto')?'active_menu':'' ?>"><a class="label-menu" class="salto" href="<?php echo site_url('inicio/contacto') ?>">Contacto</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--<div class="container"> -->

