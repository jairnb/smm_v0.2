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