<?php

namespace App\Listeners;

use App\Events\EmailUsuario;
use App\Mail\CadastroProduto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class EmailUsuarioSobreCadastroProduto
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle( EmailUsuario $event): void
    {
        $email = new CadastroProduto(
            $event->produtoNome,
            $event->produtoId,
            $event->produtoValor,
            $event->produtoDescricao,
            $event->produtoCreated_at,
        );

       Mail::to(Auth::user())->send($email);
    }
}
