let checkbox = document.querySelector("#check-form")
const facaparteBtn = document.querySelector('#faca-parte')
facaparteBtn.addEventListener('click', function(){
    if(checkbox.checked){
        $.ajax({
            type: 'GET',
            url: 'facaparteform',
            data: {},
            datatype: 'html',
            success: function (data) {
                $('#smm-conteudos-facaparte').html(data);
            },
            error: function (data) {
                console.log('error');
            }
        })
    }else{
        console.log('erro')
    }
});

        const voltarBtn = document.querySelector('#voltar')
        voltarBtn.addEventListener('click', function(){
            $.ajax({
                type: 'GET',
                url: 'facaparte',
                data: {},
                datatype: 'html',
                success: function (data) {
                    $('#smm-conteudos-facaparte').html(data);
                },
                error: function (data) {
                    console.log('error');
                }
            })
        });



