<x-layoutLogin title="Login">

    <div class="container text-center">

        <h1 class="mb-5">Login</h1>

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
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control"> 
            </div>

            <div class="form-group">
                <label for="senha" class="form-label">Senha</label>
                <input type="senha" name="senha" id="senha" class="form-control"> 
            </div>

            <button class="btn btn-primary mt-3">
                Entrar
            </button>

        </form>

    </div>

</x-layout>