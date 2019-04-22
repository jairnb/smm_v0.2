@extends('app')

@section('smm-bg-img', asset('img/img1.png'))

@section('smm-titulo', 'CONTACTAR')

{{-- @section('smm-subtitulo', 'FEIRA DA MÚSICA CABO VERDIANA') --}}

{{-- @section('smm-conteudo', 'ASSOMADA / JUNHO 2019') --}}

@section('smm-titulo-abreviado', 'O QUE DESEJA SABER?')

@section('content-smm')
    <div class="smm-contactar">
        <div class="container">  
            <div class="row">
                <div class="col-md-9 m-auto">
                    <form action="" >
                        <div class="form-group mt-3">
                            <input type="text" placeholder="Nome*" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Email*" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Assunto*" class="form-control">
                        </div>
                        <div class="form-group">    
                            <select class="form-control" id="smm-pais"></select>                    
                        </div>
                        <textarea required="true" placeholder="Mensagem*" class="form-control"></textarea>
                    </form>                      
                </div>
            </div>
        </div>
    </div>
@endsection