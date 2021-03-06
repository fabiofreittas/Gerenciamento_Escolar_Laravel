<!doctype html>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../css/app.css" rel="stylesheet">
    <title>Alteração de Cadastro</title>
</head>
<body>
<?php
@include('aluno.cabecalho')
?>
<div class="container">
    <h1 class="mt-2">Alterar Cadastro de Alunos</h1>
    <form action="/alunos/alterar" method="post" class="mt-2">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label for="id">ID: <span class="text-danger">*</span></label>
            <input type="text" id="id" name="id" class="form-control" autofocus required readonly value="{{ $aluno->id }}">
        </div>
        <div class="form-group">
            <label for="nome">Nome: <span class="text-danger">*</span></label>
            <input type="text" id="nome" name="nome" class="form-control" required value="{{$aluno->nome}}">
        </div>
        <div class="form-group">
            <label for="nascimento">Data de Nascimento: <span class="text-danger">*</span></label>
            <input type="date" id="nascimento" name="nascimento" class="form-control" required value="{{$aluno->nascimento}}">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço: <span class="text-danger">*</span></label>
            <input type="text" id="endereco" name="endereco" class="form-control" required value="{{$aluno->endereco}}">
        </div>
        <div class="form-group">
            <label for="serie">Série: </label>
            <input type="text" id="serie" name="serie" class="form-control" value="{{$aluno->serie}}">
        </div>
        <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
        <input type="submit" class="btn btn-success mt-2" value="Alterar">
    </form>
</div>

</body>
</html>