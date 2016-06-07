  $(document).ready(function(){

    ConstruirTabla("tbl_productos","No hay resultados para mostrar.",4);
    $("#js_agregar").on("click",function(){
       var url =site_url+"/paqueteria/agregarImagenModal";
       customModal(url,{},"GET","md",callbackGuardar,"","","","Nueva paquetería","Modal1");
    });

    $("body").on("click",".js_eliminar",function(){
      opcion = $(this).data("id");
      ConfirmCustom("¿Está seguro de eliminar esta paquetería?", callbackEliminar,"", "Confirmar", "Cancelar");
    });
  });


  function callbackEliminar(){
    var url =site_url+"/paqueteria/eliminarPaqueteria";
    ajaxJson(url,{"id":opcion},"POST","",function(result){
      if(result != 0)
      {
         ExitoCustom("Eliminado correctamente",function(){
         	var url = site_url+"/paqueteria";    
			$(location).attr('href',url);
         });
      }
      else{
        ExitoCustom("Error al eliminar","");
      }
    });


  }

  function callbackGuardar(){
    var imagen = $("#imagen").val();
    var nombre = $("#nombre").val();
    var precio = $("#precio").val();
    var tiempo = $("#tiempo").val();

     var url =site_url+"/paqueteria/addImagenBd";

    ajaxJson(url,{"imagen":imagen,"nombre":nombre,"precio":precio,"tiempo":tiempo},"POST","",function(result){
    if(isNaN(result)){
      console.log(result);
      data = JSON.parse( result );
      console.log(data);
      //Se recorre el json y se coloca el error en la div correspondiente
      $.each(data, function(i, item) {
         $(".error_"+i).empty();
            if(item=="<p>El campo imagen es requerido.</p>"){
              $(".error_"+i).append("Favor de subir y recortar la imagen");
            }
            else{
               $(".error_"+i).append(item);
            }           
            $(".error_"+i).css("color","red");
            console.log(i);
        });
      }else{

        if(result!=0){
         ExitoCustom("Guardado correctamente",function(){location.reload()});
        }
      }
    });
  }