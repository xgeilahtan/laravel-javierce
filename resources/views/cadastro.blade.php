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
            <div class="container">
                </br>
                <h2 class="text-center mb-4">Cadastro de Cliente</h2>
                <form id="cadastro-form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" placeholder="Insira seu nome" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    <div class="form-group">
                        <label for="data-nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" id="data-nascimento" required>
                    </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Gênero</label>
                        <div class="checkbox-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="feminino" value="Feminino" required>
                            <label class="form-check-label" for="feminino">Feminino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="masculino" value="Masculino" required>
                            <label class="form-check-label" for="masculino">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="ndizer" value="NDizer" required>
                            <label class="form-check-label" for="feminino">Outro / Prefiro não dizer</label>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefone-fixo">Telefone Fixo</label>
                        <input type="tel" class="form-control" id="telefone-fixo" placeholder="(XX) XXXX-XXXX">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefone-movel">Celular</label>
                        <input type="tel" class="form-control" id="telefone-movel" placeholder="(XX) XXXXX-XXXX" required>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="Seu melhor e-mail" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <div class="input-group">
                    <input type="password" class="form-control" id="senha" placeholder="Sua senha" required>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-secondary" id="toggle-senha">
                        <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto-perfil">Foto de Perfil</label>
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto-perfil" accept="image/*">
                    <label class="custom-file-label" for="foto-perfil">Escolher arquivo</label>
                    </div>
                    <div class="mt-2">
                    <img id="preview-foto" src="#" alt="Preview da foto" class="img-thumbnail d-none" style="max-width: 150px;">
                    </div>
                </div>
                <div class="form-group">
                    <label>Alergias</label>
                    <div class="checkbox-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="alergia-tinta">
                        <label class="form-check-label" for="alergia-tinta">Tinta de cabelo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="alergia-esmalte">
                        <label class="form-check-label" for="alergia-esmalte">Esmalte</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="alergia-cera">
                        <label class="form-check-label" for="alergia-cera">Cera</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="alergia-henna">
                        <label class="form-check-label" for="alergia-henna">Henna</label>
                    </div>
                    </div>
                </div>
                <button  class="btn btn-danger btn-block">Salvar</button>
                </form>
                </br>
            </div>
        </div>
        <x-footer-wpp></x-footer-wpp>
        <x-modal-login></x-modal-login>
    </div>

@endsection
