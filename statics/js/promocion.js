	$(document).ready(function(){
        
		 ConstruirTabla("tbl_promocion","No hay resultados para mostrar.",4);

	    $("body").on("click",".js_eliminar",function(){
            var oTable1 = $('#tbl_promocion').dataTable();
            opcion = $(this).data("id");
            aPos = oTable1.fnGetPosition($(this).parent().get(0));
            ConfirmCustom("¿Está seguro de eliminar la promoción?", callbackEliminar,"", "Confirmar", "Cancelar");
        });
	});


 function callbackEliminar(){
        var oTable1 = $('#tbl_promocion').dataTable();
        var url =site_url+"/promocion/eliminar";
        ajaxJson(url,{"id":opcion},"POST","",function(result){
            if(result != 0)
            {
                ExitoCustom("Eliminado correctamente","");
                oTable1.fnDeleteRow(aPos[0]);
            }
            else{
              ExitoCustom("Error","");
            }
        });


    }


