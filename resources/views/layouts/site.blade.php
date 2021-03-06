<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cassiere Store</title>
        <link rel="stylesheet" href="{{ asset('site/style.css?v=5') }}">
    </head>
    <body>
        <header>
            <nav class="cassiere-bg navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('site.index') }}">
                        Cassiere Store
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Envoval de Bebê
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Kit de Berço</a></li>
                                    <li><a class="dropdown-item" href="#">Tapetes</a></li>
                                    <li><a class="dropdown-item" href="#">Manta</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Casa
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Kit Queen</a></li>
                                    <li><a class="dropdown-item" href="#">Kit King</a></li>
                                </ul>
                            </li>
                            @if (Auth::guest())
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ url('/login') }}">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ url('/register') }}">Cadastre-se</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Olá {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('site.carrinho.compras') }}">Minhas compras</a></li>
                                        <li><a class="dropdown-item" href="{{ route('site.carrinho.index') }}">Carrinho</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            @yield('content')

            @if(!Auth::guest())
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="hide">
                {{ csrf_field() }}
            </form>
        @endif

        </main>

        <footer>
            <nav class="cassiere-bg navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="mx-auto order-0">
                        © 2021 , Anderson da Silva Delgado - Todos os direitos reservados
                    </div>
                </div>
            </nav>
        </footer>

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/site.js?v=1') }}"></script>
    </body>
</html>
