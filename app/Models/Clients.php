<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_group',
        'name',
        'cpf',
        'cep',
        'uf',
        'cidade',
        'bairro',
        'logradouro',
        'numero',
        'complemento',
        'telefone',
        'telefone_dois',
        'nacionalidade',
        'data_nascimento'
    ];
    
}
