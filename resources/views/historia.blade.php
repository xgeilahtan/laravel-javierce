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
        <!-- Sobre Nós -->
        <section id="sobre-nos" class="py-5">
            <div class="container">
                <h1 class="text-center mb-4">Sobre Nós</h1>
                <p class="text-center">No <strong>Javier Cabelo & Estética</strong>, oferecemos uma experiência única e personalizada de beleza e bem-estar. Nossa equipe de profissionais altamente qualificados está pronta para atender todas as suas necessidades, desde cortes de cabelo até tratamentos estéticos. Estamos localizados em São Paulo, no coração da Vila Romana, e temos o compromisso de proporcionar um atendimento excepcional em um ambiente acolhedor e moderno.</p>
                
                <!-- História do Salão -->
                <h2 class="text-center mt-5 mb-4">Nossa História</h2>
                <div class="row align-items-center">
                    <div class="col-md-6">
                    <img src="{{ asset('img/frentesalao1.jpg') }}" class="img-fluid rounded" id="frentesalao" alt="História do Salão">
                    </div>
                    <div class="col-md-6">
                        <p>Fundado em 1996, o <strong>Javier Cabelo & Estética</strong> nasceu com a missão de oferecer serviços de beleza de alta qualidade em um ambiente acolhedor e sofisticado.</p>
                        <p>Somos um salão familiar unissex, dedicado a proporcionar aos nossos clientes uma experiência excepcional que vai além da estética, promovendo bem-estar e elevando a autoestima. </p>
                        <p>Ao longo dos anos, ampliamos nossa gama de serviços e conquistamos a confiança de um público que busca não apenas beleza, mas também cuidado personalizado e profissionalismo. Nosso compromisso é transformar cada visita ao salão em um momento único, onde os clientes se sintam valorizados e renovados.</p>
                    </div>
                </div>

                <!-- Fotos do Ambiente -->
                <h2 class="text-center mt-5 mb-4">Nosso Espaço</h2>
                <div class="row">
                    <div class="col-md-4">
                    <img src="{{ asset('img/salao2.jpg') }}" class="img-fluid rounded mb-3" alt="Ambiente 2">
                    </div>
                    <div class="col-md-4">
                    <img src="{{ asset('img/salao4.jpg') }}" class="img-fluid rounded mb-3" alt="Ambiente 3">
                    </div>
                    <div class="col-md-4">
                    <img src="{{ asset('img/salao5.jpg') }}" class="img-fluid rounded mb-3" alt="Ambiente 3">
                    </div>
                </div>

                <!-- Equipe de Profissionais -->
                <section class="staff" id="Staff">
                    <div class="staff-container">
                        <h2 class="text-center mt-5 mb-4" data-aos="fade-down" data-aos-duration="1400">Nossa Equipe</h2>
                        <p data-aos="fade-up" data-aos-duration="1400" data-aos-delay="300">
                            Com quase de 30 anos de experiência, nossa equipe é composta por profissionais apaixonados e atualizados com as últimas tendências e técnicas do mercado. Cada membro da nossa equipe traz consigo uma vasta experiência e um compromisso inabalável com a excelência.
                        </p>
                        <div class="staff-grid" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="400">
                            <div class="staff-member card">
                                <div class="staff-image">
                                    <img src="{{ asset('img/janio-xavier.jpg') }}" class="card-img-top img-card-prof" alt="Foto de Jânio">
                                    <div class="staff-overlay">
                                        <p>Cabeleireiro Especialista em Cortes e Colorimetria</p>
                                    </div>
                                </div>
                                <div class="staff-info card-body">
                                    <h5 class="card-title">Jânio</h5>
                                </div>
                            </div>
                            <div class="staff-member card">
                                <div class="staff-image">
                                    <img src="{{ asset('img/divina.jpg') }}" class="card-img-top img-card-prof" alt="Foto de Divina">
                                    <div class="staff-overlay">
                                        <p>Cabeleireira, Maquiadora, Designer de Sobrancelhas, Depiladora, Esteticista e  Massagista</p>
                                    </div>
                                </div>
                                <div class="staff-info card-body">
                                    <h5 class="card-title">Divina</h5>
                                </div>
                            </div>
                            <div class="staff-member card">
                                <div class="staff-image">
                                    <img src="{{ asset('img/nath.jpg') }}" class="card-img-top img-card-prof" alt="Foto de Nathalie">
                                    <div class="staff-overlay">
                                        <p>Cabeleireira, Maquiadora, Designer de Cílios e Sobrancelhas</p>
                                    </div>
                                </div>
                                <div class="staff-info card-body">
                                    <h5 class="card-title">Nathalie</h5>
                                </div>
                            </div>
                            <div class="staff-member card">
                                <div class="staff-image">
                                    <img src="{{ asset('img/janinho.jpg') }}" class="card-img-top img-card-prof" alt="Foto de Jânio">
                                    <div class="staff-overlay">
                                        <p>Barbeiro Especialista em Cortes Masculinos</p>
                                    </div>
                                </div>
                                <div class="staff-info card-body">
                                    <h5 class="card-title">Jânio</h5>
                                </div>
                            </div>
                            <div class="staff-member card">
                                <div class="staff-image">
                                    <img src="{{ asset('img/manu.jpg') }}" class="card-img-top img-card-prof" alt="Foto de Manuela">
                                    <div class="staff-overlay">
                                        <p>Cabeleireira e Maquiadora</p>
                                    </div>
                                </div>
                                <div class="staff-info card-body">
                                    <h5 class="card-title">Manuela</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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