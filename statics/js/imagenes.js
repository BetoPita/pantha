    $(document).ready(function(){
      ConstruirTabla("tbl_productos","No hay resultados para mostrar.",4);
      $("#js_agregar").on("click",function(){
        var idproducto=$("#idproducto").val();
         var url =site_url+"/productos/agregarImagenModal";
         customModal(url,{idproducto:idproducto},"POST","md",callbackGuardar,"","","","Nueva Imagen","Modal1");
      });

      $("body").on("click",".js_eliminar",function(){
        opcion = $(this).data("id");
        ConfirmCustom("¿Está seguro de eliminar la imagen?", callbackEliminar,"", "Confirmar", "Cancelar");
      });
    });


    function callbackEliminar(){
      var url =site_url+"/productos/eliminarImagen";
      ajaxJson(url,{"id":opcion},"POST","",function(result){
        if(result != 0)
        {
          ExitoCustom("Eliminado correctamente",function(){location.reload()});
        }
        else{
          ExitoCustom("Error al eliminar","");
        }
      });


    }

    function callbackGuardar(){
      var idproducto = $("#idproducto").val();
      var imagen = $("#imagen").val();
       var url =site_url+"/productos/addImagenBd";

      ajaxJson(url,{"imagen":imagen,"idproducto":idproducto},"POST","",function(result){
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

