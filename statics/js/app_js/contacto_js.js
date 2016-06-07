$(function() {
    $('a[href="#login-popup"]').magnificPopup({
        type:'inline',
        midClick: false,
        closeOnBgClick: false
    });

    aweMaps();

    $('#contact-form').on('submit', function() {
        var $form = $(this);
        var data = $(this).serialize();

        $.ajax({
            url: 'contact.php',
            type: 'POST',
            data: data,
        })
        .done(function(res) {
            if (res && ! $(res).hasClass('failure')) {
                $form.find('input, textarea').val('');
            }
        })
        .always(function(res) {
            $('#ajax-message').html(res);
        });

        return false;
    });
});
$(document).ready(function(){
        $("#guardar").on("click",function(){
        var url =site_url+"/c_home/enviar_contacto";
        nombre=$("#nombre").val();
        email=$("#email").val();
        comentarios=$("#comentario").val();
         ajaxJson(url,{"nombre":nombre,"email":email,"comentarios":comentarios},"POST","",function(result){
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

                if(result!=0){
                 ExitoCustom("Gracias por enviar sus comentarios.",function(){location.reload()});
                } //result
              } //else
            }); //ajaxJson

        }); //funcion de guardar
   	});
