@extends('app')

@section('smm-bg-img', asset('img/img1.png'))

@section('smm-titulo', 'CONTACTE-NOS')

@section('smm-titulo-borda', 'O QUE DESEJA SABER?')

@section('smm-header-height',250)

@section('content-smm')
    <div class="smm-contactar">        
        <div class="container">  
            <div class="row">
                <div class="col-md-7 m-auto py-5 smm-textinho">
                    @if(Session::has('success'))
                        <div class="alert alert-success pt-4">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                
                    <form action="enviarmensagem" method="POST" id="form-app"> {{csrf_field()}}
                        <div class="form-group mt-3 pt-3 input-group-lg">
                            <input type="text" placeholder="Nome*" name="nome" id ="smm-nome" class="form-control" required="true">
                        </div>
                        <div class="form-group input-group-lg">
                            <input type="email" placeholder="Email*" name="email" id="smm-email" class="form-control" required="true">
                        </div>
                        <div class="input-group">
                            <div class="form-group col-md input-group-lg px-0 mr-1">
                                <input type="text" placeholder="Assunto*" name="assunto" id="smm-assunto" class="form-control" required="true">
                            </div>
                            <div class="form-group col-md input-group-lg px-0">    
                                <select class="form-control" name="pais" id="smm-pais"></select>                    
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea  name="mensagem"id="smm-mensagem" placeholder="Mensagem*" rows="7" class="form-control" required="true"></textarea>
                        </div>
                        <div class="form-group row justify-content-between">
                            <button class="btn smm-btn-enviar px-5 py-1 ml-3" type="submit">Enviar</button>
                            <span class="mr-3">*campo obrigatório</span>
                        </div>
                    </form>                      
                </div>
            </div>
        </div>
    </div>
    @include('parts/patrocinadores')
    
@endsection