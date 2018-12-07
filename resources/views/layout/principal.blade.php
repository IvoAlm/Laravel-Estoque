<html>
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Controle de Estoque</title>
    </head>
    <body>

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/produtos">
                        Estoque Laravel
                    </a>
                </div>
                <span class="navbar-brand" style="color: white"> {{ Auth::user()->name }} </span>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href= "{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">

                            LOGOUT
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </li>
                    <li>
                        <a href="{{action('ProdutoController@lista')}}">
                            Listagem
                        </a>
                    </li>
                    <li>
                        <a href="{{action('ProdutoController@novo')}}">
                            Novo
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('conteudo')
        <footer class="footer">
            <p>© Livro de Laravel da Casa do Código.</p>
        </footer>
    </div>
    </body>
</html>
