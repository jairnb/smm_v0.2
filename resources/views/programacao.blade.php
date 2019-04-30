@extends('app')

@section('smm-titulo', 'Somada Music Market')
@section('smm-bg-img', asset('img/img1.png'))
@section('smm-header-height',250)
@section('smm-titulo-borda', 'PROGRAMAÇÃO')
@section('display', 'd-none')


@section('content-smm')
    <div class="smm-inicio-programacao clearfix">
        <div id="" class="smm-side-imagem float-left d-inline-block col-md-4 des" style="background-image:url(img/img3.png);"></div>
        <div class="smm-inicio-texto col-md-8 d-inline-block pt-4 pb-4">
            <div class="w-75 mx-auto">
                <h3 class="principal-color mt-5 mb-4 text-uppercase titulo">15 de Junho</h3>
                <table class="principal-color mr-auto mt-5 mb-4">
                    <tr class="  text-left" style="height:50px;">
                        <td class="pr-5 pl-2 pb-2">19h00 - 19h10<span class="smm-textinho d-block">Rua pedonal</span></td>
                        <td class="pr-2">Escola de musica Norberto Tavares Fundation<span class="pb-2 smm-textinho d-block">Abertura</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="smm-inicio-programacao clearfix">
        <div class="smm-inicio-texto col-md-8 d-inline-block float-left pt-4 pb-4">
                <div class="w-75 mx-auto">
                    <h3 class="principal-color mt-5 mb-4 text-uppercase titulo">15 de Junho</h3>
                    <table class="principal-color mr-auto mt-5 mb-4">
                        <tr class="text-left" style="height:50px;">
                            <td class="pr-5 pl-2 pb-2">19h00 - 19h10<span class="smm-textinho d-block">Rua pedonal</span></td>
                            <td class="pr-2">Escola de musica Norberto Tavares Fundation<span class="pb-2 smm-textinho d-block">Abertura</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        <div id="smm-side-image-programacao" class="smm-side-imagem float-left col-md-4 des" style="background-image:url(img/img4.png);"></div>
    </div>

    @include('parts/patrocinadores')
   
@endsection