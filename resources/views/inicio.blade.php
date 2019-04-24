@extends('app')

@section('smm-header-height',500)

@section('smm-titulo', 'SOMADA MUSIC MARKET')

@section('smm-subtitulo', 'FEIRA DA MÚSICA CABOVERDIANA')

@section('smm-conteudo', 'ASSOMADA / JUNHO 2019')

@section('smm-titulo-borda', 'SMM 2019')

@section('content-smm')
    <div class="smm-inicio-apresentacao clearfix">
        <div class="smm-inicio-texto col-md-9 d-inline float-left pt-4 pb-4">
            <div class="w-75 mx-auto">
                <h3 class="principal-color mt-5 mb-4 text-uppercase titulo">Somada market</h3>
                <p class="principal-color text-justify mb-4">Somada Music Market (SMM) é um mercado de música 
                    alternativa com o objetivo de promover a música feita pelos cabo-verdianos, de forma a criar 
                    maneiras que as suas obras sejam expostas aos profissionais com o intuíto de fazer com que os 
                    seus trabalhos tenham sustentabilidade a longo prazo.
                    <br><br>O evento tomará lugar nos dias 14 e 15 de Junho em Assomada.
                </p>
                <button class="btn smm-btn-primary mb-5">Junte-se a nós</button>
            </div>
        </div>
        <div id="smm-inicio-apresentacao-side-image" class="smm-side-imagem col-md-3 d-inline-block" style="background-image:url(img/img3.png);">
        </div>
    </div>

    <div class="smm-inicio-evento text-center pt-4 pb-4">
        <h3 class="titulo principal-color mt-5"> O Evento</h3>
        <span class="d-block mx-auto mb-4 linha"></span>
        <p class="w-50 mx-auto text-justify mt-4 principal-color">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Rerum perspiciatis quae inventore illum officia minima? Debitis repellat 
            molestiae assumenda quo 
            molestias, nisi temporibus, est veritatis vel ipsa optio reprehenderit nostrum.
        </p>
        <span class="d-block mx-auto mb-5 linha"></span>
        <div class="smm-inicio-evento-info mt-5 mb-4">
            <div class="d-inline-block mr-5">
                <img class="d-block m-auto smm-icone-localizacao" src="img/ico1.png" alt="localização-icone">
                <label class="smm-textinho mt-2">Assomada Rua Pedonal</label>
            </div>
            <div class="d-inline-block ml-5">
                <img class="d-block m-auto w-25" src="img/ico2.png" alt="Calendário-icone">
                <label class="smm-textinho mt-2">14 - 15, Julho, 2019</label></div>  
        </div>
        <button class="btn smm-btn-primary mb-5 mt-2">Conheça nossa programação</button>
    </div>

    <div class="smm-inicio-programacao clearfix">
        <div id="smm-inicio-programacao-side-image" class="smm-side-imagem float-left d-inline-block col-md-3" style="background-image:url(img/img4.png);"></div>
            <div class="smm-inicio-texto col-md-9 d-inline-block pt-4 pb-4">
                <div class="w-75 mx-auto">
                    <h3 class="principal-color mt-5 mb-4 text-uppercase titulo">Somada music market</h3>
                    <p class="principal-color text-justify mb-4">Junte-se a nós e faça parte do primeiro mercado de 
                        música caboverdiana e aproveite essa plataforma para espandir os seus contactos.
                        <br><br>O SMM pretende, por dois dias, transformar a cidade de Assomada no centro 
                        cultural do país.
                    </p>
                    <button class="btn smm-btn-primary mb-5">Saiba mais sobre o evento</button>
                </div>
            </div>
        </div>
    </div>

    <div class="smm-inicio-patrocinadores">
        <h3 class="titulo principal-color text-center mt-5">Patrocinadores</h3>
        <span class="d-block mx-auto mb-5 linha"></span>
        <ul class="smm-inicio-patrocinadores-lista w-100 text-justify m-0 px-5 mb-5">
            <li class="patrocinadores-lista-item d-inline-block"><img class="w-100" src="img/ico1.png" alt=""></li>
            <li class="patrocinadores-lista-item d-inline-block"><img class="w-100" src="img/ico1.png" alt=""></li>
            <li class="patrocinadores-lista-item d-inline-block"><img class="w-100" src="img/ico1.png" alt=""></li>
            <li class="patrocinadores-lista-item d-inline-block"><img class="w-100" src="img/ico1.png" alt=""></li>
            <li class="patrocinadores-lista-item d-inline-block"><img class="w-100" src="img/ico1.png" alt=""></li>
            <li class="patrocinadores-lista-item d-inline-block"><img class="w-100" src="img/ico1.png" alt=""></li>
            <li class="patrocinadores-lista-item d-inline-block"><img class="w-100" src="img/ico1.png" alt=""></li>
            <li class="patrocinadores-lista-item d-inline-block"><img class="w-100" src="img/ico1.png" alt=""></li>
            
        </ul>
    </div>
@endsection