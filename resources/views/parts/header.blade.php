<header class="smm-header" style="background-image: url(img/img1.png); height: @yield('smm-header-height')px;">
    <div class="container">
        <div class="row">
            <div class="smm-centro">
                <div class="smm-header-centro">
                    <img src="img/logo.png" class="w-75 smm-logo-center mx-auto d-none" alt="">
                    <h1 class="w-50 mx-auto mb-0">@yield('smm-titulo')</h1>
                    <span class="mx-auto w-25 mb-3"></span>
                    <h2>@yield('smm-subtitulo')</h2>
                    <p>@yield('smm-conteudo')</p>
                </div>
            </div>
            <div class="smm-titulo-borda z-10">
                <div>
                    @yield('smm-titulo-borda')
                </div>
        </div>
    </div>        
</header>