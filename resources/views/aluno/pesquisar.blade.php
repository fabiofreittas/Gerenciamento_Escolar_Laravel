<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisa de Alunos</title>
    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
@include('aluno.cabecalho')
<div class="container">
    <h1 class="mt-2">Pesquisa de Aluno</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{ $mensagem }}</div>
    @endif
    <form action="/alunos/pesquisar" method="post" class="form-inline mt-2">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" class="form-control ml-2">
        </div>
        <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">

    </form>
    @if(count($alunos) == 0)
        <div class="alert alert-danger mt-2">Nenhum registro de aluno encontrado com esse nome!</div>
    @else
        <table class="table mt-2 text-center">
            <tr>
                <th>Id</th>
                <th class="text-left">Nome</th>
                <th>Data de Nascimento</th>
                <th>Endereço</th>
                <th>Série</th>
            </tr>
            @foreach ($alunos as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td class="text-left">{{ $a->nome }}</td>
                    <td>{{ $a->nascimento }}</td>
                    <td>{{ $a->endereco }}</td>
                    <td>{{ $a->serie }}</td>
                    <td><a href="/alunos/excluir/{{ $a->id }}"><button class="btn btn-danger">Excluir</button></a></td>
                    <td><a href="/alunos/alterar/{{ $a->id }}"><button class="btn btn-warning">Alterar</button></a></td>
                </tr>
            @endforeach
        </table>
    @endif
</div>
</div>

</body>
</html>