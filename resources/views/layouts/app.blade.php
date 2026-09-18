<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Projeto PW3')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <header class="mb-6 rounded-2xl border border-slate-200 bg-white/90 px-5 py-4 shadow-sm backdrop-blur">
        <div class="flex flex-wrap items-center justify-between gap-3">

            <a href="/eventos"
               class="text-lg font-black tracking-tight text-slate-900">
                NovaWave
            </a>

            <nav class="flex flex-wrap items-center gap-2 text-sm">

                <a href="/eventos"
                   class="rounded-lg px-3 py-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900">
                    Eventos
                </a>

                <a href="/eventos/novo"
                   class="rounded-lg px-3 py-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900">
                    Novo Evento
                </a>

            </nav>

        </div>
    </header>


    <main class="max-w-7xl mx-auto px-6 py-8">

        @yield('content')

    </main>


    <footer class="mt-8 rounded-xl bg-slate-900 px-6 py-5 text-sm text-slate-300">

        <p>
            © {{ date('Y') }} NovaWave. Todos os direitos reservados.
        </p>

    </footer>


    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>