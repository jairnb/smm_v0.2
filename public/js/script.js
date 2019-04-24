// const teste = document.querySelector('#teste')

document.querySelector('#faca-parte').addEventListener('click', function(){
    $.ajax({
        type: 'GET',
        url: "http://127.0.0.1:8000/facaparte",
        data: {},
        datatype: 'html',
        success: function (data) {
            console.log(data);
            $('#teste').html(data);
        },
        error: function (data) {
            console.log('error');
        }
    })
});



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
};


