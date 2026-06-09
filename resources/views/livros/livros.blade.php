<!DOCTYPE html>
<html>
<head>
    <title>Livros</title>
</head>
<body>

    <h1>Cadastro de Livros</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/livros" method="POST">
        @csrf

        <input type="text" name="titulo" placeholder="Título">
        <br><br>

        <input type="text" name="autor" placeholder="Autor">
        <br><br>

        <input type="number" name="ano_publicacao" placeholder="Ano">
        <br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <hr>

    <h2>Livros cadastrados</h2>

    @forelse($livros as $livro)
        <p>
            {{ $livro->titulo }} -
            {{ $livro->autor }} -
            {{ $livro->ano_publicacao }}
        </p>
    @empty
        <p>Nenhum livro cadastrado.</p>
    @endforelse

</body>
</html>