<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'modalidade',
        'professor',
        'rua',
        'bairro',
        'cep',
        'numero',
        'cidade',
        'estado',
        'cadastrante',
        //'professors_id',
        //'modalidade_id',
    ];
}
