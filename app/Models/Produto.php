<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public function entrada()
    {
        return $this->hasMany(Entrada::class);
    }

    public function saida()
    {
        return $this->hasMany(Saida::class);
    }

}
