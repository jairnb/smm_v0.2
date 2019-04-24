@extends('app')

@section('smm-titulo', 'Somada Music Market')
@section('smm-bg-img', asset('img/img1.png'))
@section('smm-header-height',250)
@section('smm-titulo-borda', 'PROGRAMAÇÃO')
@section('display', 'd-none')


@section('content-smm')
    <div class="smm-inicio-programacao clearfix">
        <div id="smm-inicio-programacao-side-image" class="smm-side-imagem float-left d-inline-block col-md-3" style="background-image:url(img/img3.png);"></div>
        <div class="smm-inicio-texto col-md-9 d-inline-block pt-4 pb-4">
            <div class="w-75 mx-auto">
                <h3 class="principal-color mt-5 mb-4 text-uppercase titulo">15 de Junho</h3>
                <table class="principal-color mr-auto mt-5 mb-4">
                        <tr class="border-top text-left" style="height:50px;">
                            <td class="w-25 pr-5">19h00 - 19h10<span class="smm-textinho d-block">Rua pedonal</span></td>
                            <td class="">Escola de musica Norberto Tavares Fundation<span class="smm-textinho d-block">Abertura</span></td>
                        </tr>
                        <tr class="border-top text-left" style="height:50px;">
                            <td class=" ">19h00 - 19h10<span class="smm-textinho d-block">Rua pedonal</span></td>
                            <td class="">Escola de musica Norberto Tavares Fundation<span class="smm-textinho d-block">Abertura</span></td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>

   
@endsection