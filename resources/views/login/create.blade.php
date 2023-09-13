<x-layout title="Novo usuário" titulo="Criar novo Usuário">

        <form method="post">
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control"> 
            </div>

            <div class="form-group">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control"> 
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" class="form-control"> 
            </div>

            {{-- <div class="form-group">
                <label for="passwordVerify" class="form-label">Digite a senha novamente</label>
                <input type="passwordVerify" name="passwordVerify" id="passwordVerify" class="form-control"> 
            </div> --}}

            <button class="btn btn-primary mt-3">
                Registrar
            </button>

            <a href="{{ route('entrar') }}" class="btn btn-secondary mt-3">
                <i class="bi bi-arrow-return-left"></i>
            </a>

        </form>


</x-layout>