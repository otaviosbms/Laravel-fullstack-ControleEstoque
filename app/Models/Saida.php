<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    use HasFactory;

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'saida_FkProdutoId', 'id');
    }

}
