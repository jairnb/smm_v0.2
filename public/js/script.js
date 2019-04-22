$(document).ready(function(){
    $('#year').text(new Date().getFullYear());
})


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