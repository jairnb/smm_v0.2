<header class="smm-header" style="background-image: url(@yield('smm-bg-img')">
    <div class="container">
        <div class="row">
            <div class="smm-header-centro col align-self-center d-none d-sm-block">
                <h1 class="display-4 mt-5">@yield('smm-titulo')</h1>
                <h2>@yield('smm-subtitulo')</h2>
                <p>@yield('smm-conteudo')</p>
            </div>

        </div>
    </div>        
</header>
<div class="smm-titulo-div">
    <div class="container">
        <div class="row align-items-center">
            <div class="smm-titulo-breve ">
                <span class="px-3 py-4 align-middle">@yield('smm-titulo-abreviado')</span>
            </div>
        </div>
    </div>
</div>