<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand"><img class="smm-logo" src="{{asset('img/logo.png')}}"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse smm-nav-links" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">INICÍO</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('apresentacao')}}" class="nav-link">APRESENTAÇÃO</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('programacao')}}" class="nav-link">PROGRAMAÇÃO</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contactar')}}" class="nav-link">CONTACTAR</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('facaparte')}}" class="nav-link smm-facaparte">FAÇA PARTE</a>
                </li>
            </ul>
        </div>                
    </div>
</nav>