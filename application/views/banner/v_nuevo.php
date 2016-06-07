<form id="form-categoria" method="POST" enctype='multipart/form-data' action="<?php echo site_url('banner/agregar'); ?>" >
<div class="row">
	<div class="col-md-7 col-sm-offset-2">
		<label>Imagen del banner:</label>	
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
      		$(".Modal1").hide();
      	});
	});
</script>