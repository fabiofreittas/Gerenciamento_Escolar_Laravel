@extends('layouts.app')
@include('aluno.cabecalho')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sucesso!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   Usuário Autenticado!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
