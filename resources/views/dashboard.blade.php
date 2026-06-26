<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- boostrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name')}}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name') }} </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('listagem') }}">Listar Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Cadastrar Produtos</a>
                        </li>
                    </ul>

                </div>
                <ul class="navbar-nav ml-auto">
                    @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> {{Auth::user()->name}} </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile">Perfil</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item btn btn-link">Logout </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @endauth
                    @guest
                    <li class="nav-item"> <a class="nav-link" href="login">Login</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="register">Cadastro</a> </li>
                    @endguest
                </ul>
            </div>
    </div>
    </nav>
    <div class='container'>
        @yield('conteudo')
    </div>
    <!-- Footer -->
    <footer class="mt-5">
        <nav class="navbar fixed-bottom navbar-light bg-light d-flex justify-content-center align-items-center">
            © 2025 Copyright: Programação para Internet III
        </nav>
    </footer>
    <!-- Footer -->
</body>

</html>