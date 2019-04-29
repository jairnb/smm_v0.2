@extends('app')

@section('smm-titulo', 'Somada Music Market')
@section('smm-bg-img', asset('img/img1.png'))
@section('smm-header-height',250)
@section('smm-titulo-borda', 'APRESENTAÇÃO')
@section('display', 'd-none')

@section('content-smm')
    <div class="smm-apresentacao clearfix">
        <div id="smm-apresentacao-mapa-side-image" class="smm-side-imagem float-left d-inline-block col-md-3" style="background-image:url(img/santa-catarina.png); background-size:90%!important;"></div>
            <div class="smm-inicio-texto col-md-9 d-inline-block pt-4 pb-4">
                <div class="w-75 mx-auto">
                    <h3 class="principal-color mt-5 mb-4 text-uppercase titulo">Somada music market</h3>
                    <p class="principal-color text-justify mb-4">Somada Music Market (SMM) é um mercado de música 
                        alternativa com o objetivo de promover a música feita pelos cabo-verdianos, de forma a criar 
                        maneiras que as suas obras sejam expostas aos profissionais com o intuíto de fazer com que os seus trabalhos tenham sustentabilidade a longo prazo.
				        O evento tomará lugar nos dias 14 e 15 de Junho em Assomada.
                    </p>
                    <div class="smm-inicio-evento-info mt-5 mb-4">
                        <div class="d-inline-block mr-5 text-left">
                            <img class="d-block smm-icone-localizacao" src="img/ico1.png" alt="localização-icone">
                            <label class="smm-textinho mt-2">Assomada Rua Pedonal</label>
                        </div>
                    <div class="d-inline-block ml-5">
                        <img class="d-block w-25" src="img/ico2.png" alt="Calendário-icone">
                        <label class="smm-textinho mt-2">14 - 15, Julho, 2019</label></div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="smm-fique-por-dentro pt-5 text-center" style="background-image:url(img/fique-por-dentro.png); background-size:100%">
        <h3 class="titulo secundario-color text-center">Fique por dentro</h3>
        <table class="secundario-color mx-auto mt-5 mb-4">
            <tr class="border-top" style="height:50px;">
                <td class="w-50" style=>15 de Abril</td>
                <td class="text-left pr-5">Fim das candidaturas para showcases</td>
            </tr>
            <tr class="border-top border-bottom" style="height:50px;">
                <td>14 & 15 de Junho</td>
                <td class="text-left">Somada Music Market 2019</td>
            </tr>
        </table>
        <button value="facaparte" onclick="irPagina(this.value)" class="btn smm-btn-secundary mb-5">Inscreva-se</button>
    </div>

    @include('parts/patrocinadores')
@endsection