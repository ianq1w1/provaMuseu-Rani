<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class museu extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nome', 'localizacao', 'horario_de_funcionamento', "exposicoes", "preco_de_entrada"];

}
