<header class="smm-header" style="background-image: url(@yield('smm-bg-img')">
    <div class="container">
        <div class="row">

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
            </div>
        </div>
    </div>        
</header>

