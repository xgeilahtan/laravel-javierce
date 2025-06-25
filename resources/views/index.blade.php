@extends('templates.base-template')


@push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endpush


@section('header')
<x-head></x-head>

@endsection


@section('content')

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <x-nav></x-nav>
        <div class="content">
            <div class="container animate bem-vindo">
                <h1>Bem-vindo ao Javier Cabelo e Estética!</h1>
                <p>Seu espaço de beleza e bem-estar</p>
            </div>
        </div>
        
        <x-carrossel-promo></x-carrossel-promo>
        <!-- <x-serv-pop></x-serv-pop> -->
        <x-depoimentos></x-depoimentos>
        <!-- <x-cham-agenda></x-cham-agenda> -->
        <x-footer-wpp></x-footer-wpp>
        <x-modal-login></x-modal-login>
        
    </div>
 

@endsection



@push('scripts')
<x-scripts></x-scripts>
</body>
</html>
@endpush