<header class="smm-header" style="background-image: url(@yield('smm-bg-img')">
    <div class="container">
        <div class="row">
<<<<<<< HEAD
            <div class="smm-centro">
                <div class="smm-header-centro">
                    <h1 class="w-50 mx-auto mb-0">@yield('smm-titulo')</h1>
                    <span class="mx-auto w-25 mb-3"></span>
                    <h2>@yield('smm-subtitulo')</h2>
                    <p>@yield('smm-conteudo')</p>
                </div>
            </div>
            <div class="smm-titulo-borda">
                <div>
                    @yield('smm-titulo-borda')
                </div>
=======
            <div class="smm-header-centro col align-self-center d-none d-sm-block">
                <h1 class="display-4 mt-5">@yield('smm-titulo')</h1>
                <h2>@yield('smm-subtitulo')</h2>
                <p>@yield('smm-conteudo')</p>
>>>>>>> f89600e89d422b2ead6ed11417d183fba6478039
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