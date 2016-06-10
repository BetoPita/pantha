<form id="form-categoria" method="POST" enctype='multipart/form-data' action="<?php echo site_url('imagenes_footer/actualizar_sinfoto'); ?>" >
<input type="hidden" id="id" name="id" value="<?php echo $imagenes[0]->id ?>" />
<input type="hidden" id="ruta" name="ruta" value="<?php echo $imagenes[0]->path ?>" />
<div class="row">
		<div class="col-md-7 col-sm-offset-2">
		<label>Link:</label>		
		<input type="text" class="form-control" id="link" name="link" value="<?php echo $imagenes[0]->link ?>" />
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-7 col-sm-offset-2">
		<label>Imagen</label>	
		<img src="<?php echo base_url($imagenes[0]->imagen) ?>" width="200px" alt="">
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
	<label style="color:red">Tamaño de la imagen: 85px alto, 149px ancho.</label>
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
		$("#guardar").on("click",function(){
			var nombre= $("#nombre").val();
			var imagen= $("#imagen").val().toLowerCase();
			var v =imagen.split('.');
			posicion=v.length-1;
			 if(nombre==""){
			   ErrorCustom("Es necesario ingresar el nombre","");
			   $("#form [name=nombre]").focus();
			}else if(imagen!=""){
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
	     	var sin_foto= "<?php echo site_url();?>/imagenes_footer/actualizar_sinfoto";
	     	var con_foto= "<?php echo site_url();?>/imagenes_footer/actualizar";
	     	if( $('#cambiar').prop('checked') ) {
			   $("#div_imagen").removeClass("hidden");
			    $('#form-categoria').prop('action', con_foto);
			}
			else{
				 $("#div_imagen").addClass("hidden");
				  $('#form-categoria').prop('action', sin_foto);
			}
	      	//
	      });
	});
</script>