@extends('layouts.app')

@section('title', 'Agenda de Eventos')

@section('content')

<section class="flex flex-wrap items-center justify-between gap-4">

    <div>
        <h2 class="text-3xl font-bold text-slate-900">
            Agenda de Eventos e Workshops
        </h2>

        <p class="text-slate-600 mt-1">
            Gerencie as palestras, semanas acadêmicas e atividades extracurriculares.
        </p>
    </div>

    <a href="/eventos/novo"
       class="rounded-lg bg-slate-900 px-4 py-2 font-medium text-white">
        Novo Evento
    </a>

</section>


@if (session('sucesso'))

    <div class="mt-4 p-4 bg-emerald-50 border border-emerald-200 rounded-xl">
        <span class="font-semibold">Sucesso:</span>
        <span>{{ session('sucesso') }}</span>
    </div>

@endif


<section class="mt-6 bg-white p-4 rounded-xl shadow-sm">

    <form action="/eventos" method="GET"
          class="flex flex-wrap items-center gap-3">

        <input
            type="text"
            name="busca"
            value="{{ $busca ?? '' }}"
            placeholder="Pesquisar evento por título..."
            class="rounded-lg border px-3 py-2"
        >

        <button type="submit"
                class="rounded-lg bg-slate-800 px-4 py-2 text-white">
            Filtrar
        </button>

        @if(!empty($busca))

            <a href="/eventos"
               class="rounded-lg border px-4 py-2">
                Limpar Filtro
            </a>

        @endif

    </form>

</section>


<section class="mt-6 overflow-hidden rounded-xl bg-white shadow-sm">

    <div class="border-b px-6 py-4 flex justify-between">

        <h3 class="font-semibold">
            Lista de Eventos
        </h3>

        <span>
            Total: {{ $eventos->count() }}
        </span>

    </div>


    <div class="overflow-x-auto">

        <table class="w-full text-left text-sm">

            <thead>
                <tr>
                    <th class="px-6 py-3">Código</th>
                    <th class="px-6 py-3">Título</th>
                    <th class="px-6 py-3">Local</th>
                    <th class="px-6 py-3">Vagas</th>
                    <th class="px-6 py-3">Inscrição</th>
                    <th class="px-6 py-3">Cadastro</th>
                </tr>
            </thead>


            <tbody>

                @forelse ($eventos as $evento)

                    <tr>

                        <td class="px-6 py-4">
                            #{{ $evento->id }}
                        </td>

                        <td class="px-6 py-4 font-medium">
                            {{ $evento->titulo }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $evento->local }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $evento->vagas }} vagas
                        </td>

                        <td class="px-6 py-4">

                            @if($evento->preco_inscricao > 0)

                                R$
                                {{ number_format($evento->preco_inscricao, 2, ',', '.') }}

                            @else

                                Gratuito

                            @endif

                        </td>

                        <td class="px-6 py-4">

                            {{ $evento->created_at
                                ? $evento->created_at->format('d/m/Y H:i')
                                : 'Não informada' }}

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="px-6 py-8 text-center">

                            @if(!empty($busca))

                                Nenhum evento encontrado para a busca
                                <strong>{{ $busca }}</strong>.

                            @else

                                Nenhum evento cadastrado no momento.

                            @endif

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</section>

@endsection