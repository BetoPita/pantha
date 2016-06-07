$(document).ready(function(){
    $("#guardar").on("click",function(){
       var url= site_url+"/paypal_config/guarda_correo";
       ajaxJson(url,$("#form-").serialize(),"POST","",function(result){
        if(isNaN(result)){
            console.log(result);
            data = JSON.parse( result );
            console.log(data);
            //Se recorre el json y se coloca el error en la div correspondiente
            $.each(data, function(i, item) {
                $(".error_"+i).empty();
                $(".error_"+i).append(item);
                $(".error_"+i).css("color","red");
                console.log(i);
            });
            }else{
                ExitoCustom("Guardado correctamente",function(){window.location.href=site_url+"/paypal_config";});
            }
       });
     });
   });


