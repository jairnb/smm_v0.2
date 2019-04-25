@extends('app')

@section('smm-bg-img', asset('img/img1.png'))

@section('smm-titulo', 'INSCREVA-SE')

@section('smm-titulo-borda', 'FAÇA PARTE DE SMM')

@section('smm-header-height',250)

@section('content-smm')

    <div class="container">
        <div class="py-5" id="smm-conteudos-facaparte">
            <div class="row">
                <div class="col-md-6 pt-5">
                    <h3 class="pt-5">FORMULÁRIO DE INCRIÇÃO</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis laboriosam repudiandae iusto fuga quasi cumque at iure! Enim impedit autem ratione assumenda, asperiores dolore blanditiis mollitia fugit maiores harum laudantium veritatis illum neque tempore rerum cum possimus, nesciunt iste inventore, consectetur beatae? Dicta sequi corrupti nobis atque sint harum incidunt.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis laboriosam repudiandae iusto fuga quasi cumque at iure! Enim impedit autem ratione assumenda.</p>
                </div>
                <div class="col-md-6 pt-5">
                    <h3 class="pt-5">REGRAS</h3>                   
                        <ol>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptates.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptates.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptates.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptates.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptates.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptates.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptates.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptates.</li>
                        </ol>                    
                </div>
            </div>
            <div class="pt-5">
                <input type="checkbox" name="" id="">Lorem ipsum dolor sit amet.
            </div>
            <div class="row justify-content-end">
                <button class="btn smm-btn-enviar mr-2">Voltar</button>
                <button class="btn smm-btn-enviar mr-4" id="faca-parte">Promixo</button>
            </div>
        </div>
    </div>
    
   
    
@endsection