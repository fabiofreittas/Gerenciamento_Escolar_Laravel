<meta name="csrf-token" content="{{ csrf_token() }}">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="/alunos/inserir" class="nav-link">Cadastrar Aluno</a></li>
            <li class="nav-item"><a href="/alunos/pesquisar" class="nav-link">Pesquisar Aluno</a></li>
        </ul>
    </div>
        <a class="navbar-brand" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Sair') }}
        </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
