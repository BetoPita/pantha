<?php $this->load->view('v_header'); ?>


<link rel="stylesheet" href="assets/css/style2.css"> 
<style type="text/css">
body{
    background: url('assets/img/contacto-fondo.jpg') no-repeat center center fixed;
    background-size: cover;
}
</style>
<div class="container-promocion">
	<div class="container" style="margin-top:40px">
		<form id="form" method="POST" action="<?php echo site_url('inicio/enviar') ?>"></form>
			<div class="row p-b-10">
				<div class="col-sm-6">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<img class="img img-responsive" src="assets/img/contacto-frase.png">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<div class="row p-b-10">
						<div class="col-sm-12">
							<label class="color_letra">Nombre</label>
							<input name="nombre" id="nombre" class="form-control"/>
							<div class="error_nombre form-error"></div>
						</div>
					</div>	
					<div class="row p-b-10">
						<div class="col-md-6">
							<label class="color_letra">Email</label>
							<input name="email" id="email" class="form-control"/>
							<div class="error_email form-error"></div>
						</div>
						<div class="col-md-6">
							<label class="color_letra">Télefono con LADA</label>
							<input name="telefono" maxlength="10" id="telefono" class="form-control positive"/>
							<div class="error_telefono form-error"></div>
						</div>
					</div>	
					<div class="row p-b-10">
						<div class="col-sm-12">
							<label class="color_letra">Ciudad y estado</label>
							<input name="ciudad" id="ciudad" class="form-control"/>
							<div class="error_ciudad form-error"></div>
						</div>
					</div>
					<div class="row p-b-10">
						<div class="col-sm-12">
							<label class="color_letra">Mensaje</label>
							<textarea name="mensaje" rows="2" id="mensaje" class="form-control"> </textarea>
							<div class="error_mensaje form-error"></div>
						</div>
					</div>
					<br>
					<div class="row" style="margin-right: 0px;">
						<div class="col-sm-3">
							<button name="enviar" id="enviar" class="btn btn-default enviar_contacto">Enviar</button>
						</div>
					</div>
				</div> <!-- col-5 -->
			</form>
				 <div class="col-md-5 col-md-offset-1" id="div_mapa" style="margin-top: 10px;">
					 <div class="row" style="margin-right: 0px;">
					 	<div class="col-md-12">
					 		<div id="mapa-direccion" style="width: 600px; height: 250px; "></div>
							 <input type="hidden" id="latitud" name="latitud" class="form-control" />
							 <input type="hidden" id="longitud" name="longitud" class="form-control" />

							<img class="hidden" id="imagen_mapa" src="assets/img/ubicacion.png" />
					 	</div>
					 </div>
		 		</div>


			</div> <!-- row -->
			    
<br>
<br>
<br>
<br>
 <div class="col-sm-1 esconderlaapi" id="liquidBoxContainer"></div>
</div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
 <script type="text/javascript">
var geoCode = new google.maps.Geocoder();
 function initialize()
    {

                    var latLng = new google.maps.LatLng(25.8018114,-108.9922012);
                    //var latLng = new google.maps.LatLng('','');
                    var markerImage = new google.maps.MarkerImage($("#imagen_mapa").attr('src'),
                                                          new google.maps.Size(34, 32),
                                                          new google.maps.Point(0, 0),
                                                          new google.maps.Point(0, 32));
        var map = new google.maps.Map(document.getElementById('mapa-direccion'),{
            zoom: 18,
            center: latLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
            position: latLng,
            title: 'Seleccione su ubicacion',
            map: map,
            icon: markerImage,
            draggable: false
        });

        //ACTUALIZAR LA INFORMACION DE LA POSICION ACTUAL
        updateMarkerPosition(latLng);
        geocodePosition(latLng);

        //AGREGAR EL EVENTO DE ARRASTRAR LOS DATOS
        google.maps.event.addListener(marker, 'dragstart', function(){
            updateMarkerAddress('...');
        });

        google.maps.event.addListener(marker, 'drag', function(){
            updateMarkerStatus('.....');
            updateMarkerPosition(marker.getPosition());
        });

        google.maps.event.addListener(marker, 'dragend', function(){
            updateMarkerStatus('....');
            geocodePosition(marker.getPosition());
        });
    }

    /**
     * METODO QUE SE USA PARA EL CODIGO
     * DE LA POSICION
     **/
    function geocodePosition(pos)
    {
        geoCode.geocode({
                latLng: pos
            }, function(responses){
                if(responses && responses.lenght > 0){
updateMarkerAddress(responses[0].formatted_address);
                } else {
                    updateMarkerAddress('');
                }
            }
        );
    }

    /**
     * ACTUALIZAR EL DATO DE LOS MARKERS
     * EN EL GOOGLE MAPS
     **/
    function updateMarkerStatus(str){
        //document.getElementById('markerStatus').innerHTML = str;
    }

    function updateMarkerPosition(latLng)
    {
        var uno = latLng.lng();
        var dos = latLng.lat();
        document.getElementById('longitud').value = uno;
        document.getElementById('latitud').value = dos;
    }

    function updateMarkerAddress(str){
        //document.getElementById('address').innerHTML = str;
    }

    //EVENTO ONLOAD PARA ACTIVAR LA APLICACION
    google.maps.event.addDomListener(window, 'load', initialize);
</script> 


        

<?php $this->load->view('v_footer'); ?>
 <script type="text/javascript">
        /*$(document).ready(function(){
            inicio();
        });
        function inicio()
        {
            var total=$(window).height()-50;
            //console.log(total);
            $(".side-nav").css("min-height",total+"px");
        }*/
       $(document).ready(function(){
       		site_url="<?php echo site_url() ?>"
	         $("#enviar").on('click',enviar);
	           $(".positive").numeric({negative : false});
	    });
	        function enviar(){
	        	var nombre = $("#nombre").val();
	        	var email = $("#email").val();
	        	var telefono = $("#telefono").val();
	        	var ciudad = $("#ciudad").val();
	        	var mensaje = $("#mensaje").val();
	        	ajaxJson(site_url+'/inicio/enviar',{"nombre":nombre,"email":email,"telefono":telefono,"ciudad":ciudad,"mensaje":mensaje},"POST",true,function(result){
	        		console.log(result);
	              if(isNaN(result)){
	                data = JSON.parse( result );
	                //Se recorre el json y se coloca el error en la div correspondiente
	                $.each(data, function(i, item) {
	                    $(".error_"+i).empty();
	                    $(".error_"+i).append(item);
	                    $(".error_"+i).css("color","red");
	                });
	  		    }else{
	                    ExitoCustom("Enviado correctamente",function(){
	                    	window.location.href=site_url+"/inicio/contacto";
	                    });
	                }
	        	});

	        }
      
    </script>