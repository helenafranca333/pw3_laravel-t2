<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'projeto pw3')</title>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
</head>

<body>
    <header class="site-header">
        <div class="container">
            <h1>PW3 - projeto laravel</h1>
            <nav>
             <a href="/inicio">inicio</a>
             <a href="/landing">landing</a>   
             <!-- pesquisar landing page -->
             <a href="/admin">admin</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="site-footer">
        <div class="container"></div>
        <p>{{ date('y') }} - projeto academico pw3</p>
    </footer>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
 
</html>