<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $fillable = ['quantidade', 'entrada_FkProdutoId'];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'entrada_FkProdutoId', 'id');
    }

}