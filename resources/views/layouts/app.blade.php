<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', '3D Manager') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                

                <ul class="nav navbar-nav left">
                
                    <li><a href="{{ url('/home') }}">Home</a>
                    </li>
                    @if (!Auth::guest())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Cadastros <span class="caret"></span>
                            </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{action('CorController@novo')}}">Nova Cor</a>
                            </li>
                            <li><a href="{{action('CorController@listar')}}">Todas as Cores</a>
                            </li>

                            <li role="separator" class="divider"></li>

                            <li><a href="{{action('FornecedorController@novo')}}">Novo Fornecedor</a>
                            </li>
                            <li><a href="{{action('FornecedorController@listar')}}">Todos os Fornecedores</a>
                            </li>

                            <li role="separator" class="divider"></li>

                            <li><a href="{{action('MaterialController@novo')}}">Novo Material</a>
                            </li>
                            <li><a href="{{action('MaterialController@listar')}}">Todos os Materiais</a>
                            </li>

                            <li role="separator" class="divider"></li>
                            
                            <li><a href="{{action('FilamentoController@novo')}}">Novo Filamento</a>
                            </li>
                            <li><a href="{{action('FilamentoController@listar')}}">Todos os Filamentos</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            
                            <li><a href="{{action('StatusImpController@novo')}}">Novo Status</a>
                            </li>
                            <li><a href="{{action('StatusImpController@listar')}}">Todos os Status</a>
                            </li>
                            
                            <li role="separator" class="divider"></li>
                            
                            <li><a href="{{action('PecaController@novo')}}">Nova Peça</a>
                            </li>
                            <li><a href="{{action('PecaController@listar')}}">Todos as Peças</a>
                            </li>

                            <li role="separator" class="divider"></li>
                            
                            <li><a href="{{action('PedidoController@novo')}}">Novo Pedido</a>
                            </li>
                            <li><a href="{{action('PedidoController@listar')}}">Todos os Pedidos</a>
                            </li>

                            <li role="separator" class="divider"></li>

                            <li><a href="{{action('VendaController@listar')}}">Todos as Vendas</a>
                            </li>

                            <li role="separator" class="divider"></li>

                            <li><a href="{{action('ImpressaoController@novo')}}">Nova Impressão</a>
                            </li>
                            <li><a href="{{action('ImpressaoController@listar')}}">Todos as Impressões</a>
                            </li>
                        </ul>                   

                     </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Usuários <span class="caret"></span>
                            </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('/register') }}">Registrar um Usuário</a>
                            </li>
                            <li><a href="{{url('/usuarios') }}">Todos os usuários</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
