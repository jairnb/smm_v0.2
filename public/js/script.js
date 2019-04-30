$(window).resize(function(){
    ajuste();
});

jQuery(document).ready(function(){
    
    ajuste();
});


function ajuste(){
    $('#year').text(new Date().getFullYear());
    $(".smm-side-imagem").height($(".smm-side-imagem").parent().find('.smm-inicio-texto').height() + 48);
    $("#smm-inicio-programacao-side-image").height($("#smm-inicio-programacao-side-image").parent().find('.smm-inicio-texto').height() + 48);
}



