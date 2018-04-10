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
<div class="container">
    <h1 class="mt-2">Pesquisa de Aluno</h1>
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
                </tr>
            @endforeach
        </table>
    @endif
</div>
</div>

</body>
</html>