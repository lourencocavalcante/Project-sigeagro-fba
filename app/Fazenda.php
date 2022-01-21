<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fazenda extends Model
{
    use HasFactory;
    protected $fillable = ['faz_id','faz_proprietario_id','faz_nome','faz_endereco','faz_cidade','faz_cnpj_cpf'];
}
