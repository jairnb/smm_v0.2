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

$(document).ready(function(){
    $('#year').text(new Date().getFullYear());
    ajuste();
});




function ajuste(){
    console.log("arumou");
    $("#smm-inicio-apresentacao-side-image").height($("#smm-inicio-apresentacao-side-image").parent().height());
    $("#smm-inicio-programacao-side-image").height($("#smm-inicio-programacao-side-image").parent().height());
};


