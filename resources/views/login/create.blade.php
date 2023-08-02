<x-layoutLogin title="Novo usuário">

    <div class="container text-center">

        <h1 class="mb-5">Novo Usuário</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

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

            <button class="btn btn-primary mt-3">
                Registrar
            </button>

        </form>

    </div>

</x-layout>