@extends('templates.base-template')


@push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<style>
    .pagination {
        margin: 0;
        font-size: 0.9rem;
        margin-bottom: 20px;
    }
    .page-item .page-link {
        padding: 0.4rem 0.75rem;
        margin: 0 2px;
        border-radius: 4px;
    }
    .input-group {
        max-width: 50rem;
        margin: 0 auto;
    }
    .input-group-text {
        border-radius: 0.375rem 0 0 0.375rem;
        border-right: none;
    }

    .form-control.border-start-0.ps-0 {
        border-left: none;
        border-radius: 0 0.375rem 0.375rem 0;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #ced4da;
    }

    .input-group:hover .input-group-text,
    .form-control:focus + .input-group-text {
        background-color: #f8f9fa;
    }
</style>
@endpush


@section('header')
<x-head></x-head>
@endsection


@section('content')
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <x-nav></x-nav>
        <x-menu-produtos></x-menu-produtos>
        <!-- <x-pesquisa-produtos></x-pesquisa-produtos> -->
        <!-- Campo de busca com ícone -->
        <div class="container-fluid mt-4">
            <form action="{{ route('produtos') }}" method="GET" class="mb-4">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="text" name="busca" class="form-control border-start-0 ps-0" placeholder="Buscar produto..." value="{{ request('busca') }}" list="lista-produtos" autocomplete="off">
                    <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <datalist id="lista-produtos">
            @foreach ($produtosPaginados->items() as $produto)
                <option value="{{ $produto['nome'] }}"></option>
            @endforeach
        </datalist>
        @if(request('busca'))
            <h4>Resultados para: "<strong>{{ request('busca') }}</strong>"</h4>
        @endif
        <!-- Container principal -->
        <div class="container-fluid mt-4">
            <div class="row">
                @if(request('categoria'))
                    <h4 class="mt-4">Exibindo produtos da categoria: <strong>{{ ucfirst(request('categoria')) }}</strong></h4>
                @endif

                @if(request('marca'))
                    <h4 class="mt-4">Exibindo produtos da marca: <strong>{{ request('marca') }}</strong></h4>
                @endif
                @foreach ($produtosPaginados as $produto)
                    <div class="col-sm-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('img/' . $produto['imagem']) }}" class="card-img-top" alt="{{ $produto['nome'] }}">
                            <div class="card-body">
                                <h5 class="card-title-prod">{{ $produto['nome'] }}</h5>
                                <p class="card-text-prod">R$ {{ $produto['preco'] }}</p>
                                <a href="#" class="btn btn-primary">Ver mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Paginação personalizada -->
            <div class="d-flex justify-content-center mt-4">
                <nav>
                    <ul class="pagination">
                        <!-- Botão Anterior -->
                        @if ($produtosPaginados->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">← Anterior</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $produtosPaginados->previousPageUrl() }}">← Anterior</a></li>
                        @endif

                        <!-- Números das páginas -->
                        @foreach ($produtosPaginados->getUrlRange(1, $produtosPaginados->lastPage()) as $page => $url)
                            <li class="page-item @if ($page == $produtosPaginados->currentPage()) active @endif">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        <!-- Botão Próximo -->
                        @if ($produtosPaginados->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $produtosPaginados->nextPageUrl() }}">Próximo →</a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link">Próximo →</span></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <x-footer-wpp></x-footer-wpp>
        <x-modal-login></x-modal-login>
    </div>
@endsection



@push('scripts')
<x-scripts></x-scripts>
</body>
</html>
@endpush