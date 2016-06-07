	$(document).ready(function(){

		 ConstruirTabla("tbl_evento","No hay resultados para mostrar.",4);

	    $("body").on("click",".js_eliminar",function(){
            var oTable1 = $('#tbl_evento').dataTable();
            opcion = $(this).data("id");
            aPos = oTable1.fnGetPosition($(this).parent().get(0));
            ConfirmCustom("¿Está seguro de eliminar el evento?, TODOS LOS REGISTROS RELACIONADOS SERÁN AFECTADOS", callbackEliminar,"", "Confirmar", "Cancelar");
        });
	});


 function callbackEliminar(){
        var oTable1 = $('#tbl_evento').dataTable();
        var url =site_url+"/evento/eliminar";
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


