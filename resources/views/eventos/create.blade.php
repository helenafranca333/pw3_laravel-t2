@extends('layouts.app')

@section('title', 'Novo Evento')

@section('content')

<div class="max-w-2xl mx-auto mt-8 bg-white p-6 rounded-xl shadow-sm">

    <h2 class="text-2xl font-bold text-slate-900">
        Cadastrar Novo Evento
    </h2>

    <p class="text-slate-600 mt-1">
        Preencha as informações do workshop ou palestra para adicionar à agenda.
    </p>

    @if ($errors->any())
        <div class="mt-4 p-4 bg-rose-50 border border-rose-200 rounded-lg">
            <p class="font-semibold">
                Verifique os erros listados:
            </p>

            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/eventos" method="POST" class="mt-6 space-y-4">

        @csrf

        <div>
            <label for="titulo" class="block text-sm font-medium">
                Título do Evento
            </label>

            <input
                type="text"
                name="titulo"
                id="titulo"
                value="{{ old('titulo') }}"
                placeholder="Ex: Semana da Tecnologia 2026"
                class="mt-1 block w-full rounded-lg border px-3 py-2"
            >
        </div>

        <div>
            <label for="local" class="block text-sm font-medium">
                Local de Realização
            </label>

            <input
                type="text"
                name="local"
                id="local"
                value="{{ old('local') }}"
                placeholder="Ex: Auditório Principal"
                class="mt-1 block w-full rounded-lg border px-3 py-2"
            >
        </div>

        <div>
            <label for="vagas" class="block text-sm font-medium">
                Quantidade de Vagas
            </label>

            <input
                type="number"
                name="vagas"
                id="vagas"
                value="{{ old('vagas') }}"
                placeholder="Ex: 50"
                class="mt-1 block w-full rounded-lg border px-3 py-2"
            >
        </div>

        <div>
            <label for="preco_inscricao" class="block text-sm font-medium">
                Valor da Inscrição (R$)
            </label>

            <input
                type="number"
                step="0.01"
                name="preco_inscricao"
                id="preco_inscricao"
                value="{{ old('preco_inscricao', '0.00') }}"
                placeholder="0.00"
                class="mt-1 block w-full rounded-lg border px-3 py-2"
            >

            <span class="text-xs text-slate-500">
                Informe 0.00 para eventos gratuitos.
            </span>
        </div>

        <div class="flex justify-end gap-3 pt-4">

            <a href="/eventos"
               class="rounded-lg border px-4 py-2">
                Cancelar
            </a>

            <button type="submit"
                    class="rounded-lg bg-slate-900 px-4 py-2 text-white">
                Salvar Evento
            </button>

        </div>

    </form>

</div>

@endsection