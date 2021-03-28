<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'name',
        'logradouro',
        'number',
        'bairro',
        'estado',
        'cidade',
        'telefone',
        'cpf',
        'rg',
    ];
}
