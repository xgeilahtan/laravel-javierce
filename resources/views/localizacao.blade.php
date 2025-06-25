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
        <!-- Localização -->
        <section id="localizacao" class="py-5 bg-light">
            <div class="container">
                <h1 class="text-center mb-4">Localização</h2>
                <div class="row">
                <div class="col-md-6">
                    <p>
                        Venha nos visitar no coração da Vila Romana, em São Paulo.
                        Nosso espaço foi projetado para oferecer conforto e bem-estar durante sua visita.
                    </p>
                    <p>
                    <strong>Endereço:</strong>
                    <a href="https://maps.app.goo.gl/CXz22Gm6DEB6EUWX8" class="linkk">Rua Tito, 1725 - Vila Romana, São Paulo - SP</a>
                    <br>
                    <strong>Telefone:</strong> (11) 3641-9604<br>
                    <strong>WhatsApp:</strong> (11) 3863-9629<br>
                    <strong>E-mail:</strong> javiercabeloeestetica@gmail.com
                    </p>
                </div>
                <div class="col-md-6">
                    <!-- Mapa -->
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.984789544638!2d-46.69347632499275!3d-23.52868236284223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57b2b8a3d481%3A0x815573e5a0b87d37!2sRua%20Tito%2C%201725%20-%20Vila%20Romana%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1sen!2sbr!4v1698933080000!5m2!1sen!2sbr"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                </div>
            </div>
        </section>
        <x-footer-wpp></x-footer-wpp>
        <x-modal-login></x-modal-login>
        
    </div>
 

@endsection



@push('scripts')
<x-scripts></x-scripts>
</body>
</html>
@endpush