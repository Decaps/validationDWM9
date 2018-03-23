<!doctype html>
<html lang="FR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet/less" type="text/css" href="../css/style.less" />

        <title>DURAN Musique</title>
    </head>
    <body>
        <div id="navbar">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">Accueil</a>
                        <a href="{{ url('/disksList') }}">Liste des disques</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">Déconnexion</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    @else
                        <a href="{{ route('login') }}">Connexion</a>
                        <a href="{{ route('register') }}">S'enregister</a>
                    @endauth
                </div>
            @endif
        </div>
    <main>
        <h1>@yield('title')</h1>
        @yield('content')
    </main>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
    </body>
</html>
