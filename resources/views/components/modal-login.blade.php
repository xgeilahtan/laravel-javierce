<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Área do Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulário de Login -->
                <form id="login-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email-login">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email-login" placeholder="Seu e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="senha-login">Senha</label>
                        <input type="password" name="password" class="form-control" id="senha-login" placeholder="Sua senha" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Entrar</button>
                </form>
                <div class="text-center mt-3">
                    <a href="#" id="forgot-password">Esqueci minha senha</a><br>
                    <a href="{{ route('cadastro-usuario') }}">Quero me cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</div>