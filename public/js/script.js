$(document).ready(function(){
    $('#year').text(new Date().getFullYear());

    ajuste();
});


// const teste = document.querySelector('#teste')

document.querySelector('#faca-parte').addEventListener('click', function(){
    $.ajax({
        type: 'GET',
        url: "http://127.0.0.1:8000/facaparte",
        data: {},
        datatype: 'html',
        success: function (data) {
            console.log(data)
            $('#teste').html(data)
        },
        error: function (data) {
            console.log('error')
        }
    })
<<<<<<< HEAD
});


$(window).resize(function(){
    $(".smm-inicio-programacao").height()
    ajuste();
});



function ajuste(){
    $("#smm-inicio-apresentacao-side-image").height($("#smm-inicio-apresentacao-side-image").parent().height());
    $("#smm-inicio-programacao-side-image").height($("#smm-inicio-programacao-side-image").parent().height());
};
=======
})


let dropdown = $('#smm-pais');

dropdown.empty();

dropdown.append('<option selected="true" disabled>Pais</option>');
dropdown.prop('selectedIndex', 0);

const url = 'http://restcountries.eu/rest/v2/all';

// Populate dropdown with list of provinces
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    dropdown.append($('<option></option>').attr('value', entry.abbreviation).text(entry.name));
  })
});
>>>>>>> f89600e89d422b2ead6ed11417d183fba6478039
