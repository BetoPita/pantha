<form id="form-categoria" method="POST" enctype='multipart/form-data' action="<?php echo site_url('banner/actualizar'); ?>" >
<input type="hidden" id="id" name="id" value="<?php echo $banner[0]->id ?>" />
<input type="hidden" id="ruta" name="ruta" value="<?php echo $banner[0]->path ?>" />
<div class="row">
	<div class="col-md-7 col-sm-offset-2">
		<label>Imagen</label>	
		<img src="<?php echo base_url($banner[0]->imagen) ?>" width="200px" alt="">
	</div>
</div>
<br>
<div class="row">
		<div class="col-md-9 col-sm-offset-2">	
		<input type="checkbox" value="1" id="cambiar">
		<label>Seleccionar esta opción si desea cambiar la imagen</label>
	</div>
</div>
<br>
<div id="div_imagen" class="row hidden">
	<div class="col-md-7 col-sm-offset-2">
		<label>Imagen de la categoría:</label>	
		<input type="file" id="imagen" name="imagen" />
	</div>
</div>
<br>
<div class="row">
<div class="col-sm-7 col-sm-offset-2">
	<label style="color:red">Tamaño de la imagen: 1179px alto, 2368px ancho.</label>
</div>
</div>
<br>
<div class="row">
	<div class="col-lg-5 pull-right">
		<input type="button" id="guardar" class="btn btn-success " value="Guardar">
		<input type="button" id="cancelar" class="btn btn-danger " value="Cancelar">
	</div>
</div>
</form>	

<script type="text/javascript">
	$(document).ready(function(){
		$("#guardar").hide();
		$("#guardar").on("click",function(){
			var imagen= $("#imagen").val().toLowerCase();
			var v =imagen.split('.');
			posicion=v.length-1;
			if(imagen!=""){
		    	if(v[posicion]=="jpg"){
					$( "#form-categoria" ).submit();
				}else if(v[posicion]=="jpeg"){
		  	    	 $( "#form-categoria" ).submit();
				}else if(v[posicion]=="png"){
		  	    	 $( "#form-categoria" ).submit();
				}else{
					ErrorCustom("Es necesario seleccionar un formato de imagen válido (png,jpg,jpeg) ","");
				}
			}else{
				 $( "#form-categoria" ).submit();
			}

		});
		 $("body").on("click","#cancelar",function(){ 
      		$(".Modal2").hide();
      	});

	    $("#cambiar").on("click",function(){ 
	     	if( $('#cambiar').prop('checked') ) {
     		  	$("#div_imagen").removeClass("hidden");
				$("#guardar").show();
			}
			else{
			  	$("#div_imagen").addClass("hidden");
				$("#guardar").hide();
			}
	      	//
	      });
	});
</script>