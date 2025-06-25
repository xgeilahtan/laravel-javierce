<nav class="main-header navbar navbar-expand navbar-light navbar-white">
    <div class="container">
        <a href="{{ route('index') }}" class="navbar-brand mr-auto">
            <img src="{{ asset('img/Logo-2.2.png') }}" alt="Javier Cabelo & Estética" class="brand-image img-fluid">
            <span class="brand-text font-weight-light">Javier</span>
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('index') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('historia') }}" class="nav-link">História</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('produtos') }}" class="nav-link">Produtos</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('localizacao') }}" class="nav-link">Localização</a>
            </li>
        </ul>
        <!-- Ícone de chamada telefônica -->
        <a href="tel:+551136419604" class="phone-icon nav-item nav-link">
            <i class="fas fa-phone"></i>
        </a>
        <!-- Botão WhatsApp -->
        <a class="nav-item nav-link" href="https://wa.me/551138639629" target="_blank">
            <i class="fab fa-whatsapp" style="color: #25D366;"></i>
        </a>
        <!-- Botão Instagram -->
        <a class="nav-item nav-link" href="https://www.instagram.com/javiercabeloeestetica" target="_blank">
            <i class="fab fa-instagram" style="color: #E1306C;"></i>
        </a>
        <!-- Área do Cliente -->
        <!-- <a class="nav-item nav-link" href="#area-cliente" data-toggle="modal" data-target="#loginModal">
            <i class="fas fa-user-circle" style="color: #DCDCDC;"></i>
        </a> -->

        <!-- Área do Cliente (com condição de login) -->
        <li class="nav-item">
            @if(auth()->check())
                <a href="{{ route('perfil.usuario') }}" class="nav-link">Olá, {{ auth()->user()->name }}</a>
            @else
                <a href="#" data-toggle="modal" data-target="#loginModal" class="nav-link">Login</a>
            @endif
        </li>
        <button class="menu-toggle" aria-label="Menu">
            ☰
        </button>

    </div>
</nav>