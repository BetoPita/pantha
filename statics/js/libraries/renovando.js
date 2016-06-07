var isUIBlocked=false;



var showErrorDialog = function (mensaje, callback) {
    bootbox.dialog({
        message: mensaje,
        closeButton: false,
        buttons:
        {
            "danger":
            {
                "label": "<i class='icon-remove'></i> Cerrar",
                "className": "btn-danger",
                "callback": function () {
                    if (callback != "") {
                        var call = $.Callbacks();
                        call.add(callback);
                        call.fire();
                    }
                }
            }
        }
    });
}




function desbloquear(){
	$.unblockUI();
	isUIBlocked = false;

}

function bloquear(){
	isUIBlocked = true;
	$.blockUI({  overlayCSS:  {
		backgroundColor: '#fff',
		opacity:         0.6,
		cursor:          'wait'
	},
	message: null});
}


function cargandoMensaje(mensaje){
	isUIBlocked = true;
	$.blockUI({
	    message: '<h4><img src="statics/img/loader.gif" /><br/>'+mensaje+'</h4>'
     });
}


/*function cargando(txt){
	var mensaje = "Procesando la información...";
	if(txt != undefined){
		mensaje = txt;
	}
	var timer = 1000;
	setTimeout('cargandoMensaje("' + mensaje + '")',timer);
}*/

function cargandoAjax(){
	isUIBlocked = true;

	$.blockUI({
	     message: '<img src="statics/img/loaderajax.gif" />',
	     showOverlay: false,
	     centerY: false,
	     css: {
		display: 'scroll',
		position: 'fixed',
		width: '80px',
		height: '32px',
		bottom: '0px',
		right: '0px',
		left: '',
		top: '',
		border: '1px',
		borderRadius: '5px',
		padding: '5px',
		backgroundColor: '#fff',
		'-webkit-border-radius': '5px',
		'-moz-border-radius': '5px',
		opacity: .6,
		color: '#fff'
	     }
	});
}

function preload(sources)
{
  jQuery.each(sources, function(i,source) { jQuery.get(source); });
}


(function($){
$.fn.serializeAny = function(clase) {
    var ret = [];
    $.each( $(this).find(':input'+clase), function() {
    	if(this.name != ""){
        	ret.push( encodeURIComponent(this.name) + "=" + encodeURIComponent( $(this).val() ) );
    	}
    });

    return ret.join("&").replace(/%20/g, "+");
}
})(jQuery);

$(function(){


	try{
		$(".numeric").numeric();
		$(".positive").numeric({negative : false});
		$(".integer").numeric({negative : false});
		

	}catch(excp){}

	$('.select2').select2({ width: '100%' });
	$(".busqueda").select2();
	


	


    var searchConcept = $("#buscarMenu_" + $("#search_param").val()).text();
	if(searchConcept != ''){ $('.search-panel span#search_concept').text(searchConcept); }

    $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();

		var param = $.url($(this).attr('href')).attr('fragment');
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});

	$("#search_button").click(function(){
		$("#search_form").submit();
	});
	/*$("form").submit(function(){
		cargando("Procesando la información...");
	});
	$(".update").on('click', function(){
		cargando("Procesando la información...");
	});*/

	preload(['statics/img/loader.gif','statics/img/loaderajax.gif']);



	$.postJSON = function(url, data, callback) {
		$.post(url, data, callback, "json");
	};

	$(document).ajaxStart(function(){
	    if(!isUIBlocked){
		cargandoAjax()
	    }
	});
	$(document).ajaxSuccess(function(){ desbloquear() });
	//$(document).ajaxError(function(){ $.blockUI({ message: '<h3>Error al procesar la información.</h3>', css: { width: '275px' } }); setTimeout($.unblockUI, 1000);  });


});

