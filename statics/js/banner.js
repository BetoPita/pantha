	$(document).ready(function(){

		var url = site_url+'/banner/nuevo';
		var	urleditar=site_url+'/banner/editar';
		 ConstruirTabla("tbl_productos","No hay resultados para mostrar.",2);
        $("body").tooltip({ selector: "[data-toggle='tooltip']" });

	        $("#js_agregar").on("click",function(){

			customModal(url,{},"GET","md",callbackGuardar,"","","","Nuevo Banner","Modal1");
		});
	    $("body").on("click",".js_editar",function(){
	    	 opcion =$(this).data("id");
	    	 var oTable1 =$("#tbl_productos").dataTable();
	    	 pos = oTable1.fnGetPosition($(this).parent().get(0)); 
	    	 customModal(urleditar,{id:opcion},"GET","md",callbackEditar,"","","","Editar Banner","Modal2");
	    });
	    $("body").on("click",".js_eliminar",function(){ 
            var oTable1 = $('#tbl_productos').dataTable();
            opcion = $(this).data("id");  
            aPos = oTable1.fnGetPosition($(this).parent().get(0)); 
            ConfirmCustom("¿Está seguro de eliminar el banner?", callbackEliminar,"", "Confirmar", "Cancelar");
        });
	});

	function callbackGuardar(){

	}
	function callbackEditar(){


	}
 function callbackEliminar(){
        var oTable1 = $('#tbl_productos').dataTable();
        var url =site_url+"/banner/eliminar";
        ajaxJson(url,{"id":opcion},"POST","",function(result){
            if(result != 0)
            {
                ExitoCustom("Eliminado correctamente","");
                oTable1.fnDeleteRow(aPos[0]);               
            }
        });

        
    }
	