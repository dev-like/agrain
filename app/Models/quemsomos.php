<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quemsomos extends Model
{
    protected $table = 'quemsomos';
    protected $fillable = ['id','razaosocial', 'nomefantasia', 'cnpj', 'ie', 'quemsomos', 'email', 'telefone1', 'telefone2', 'sac','endereco','bairro',
    'cidade','estado','cep','facebook','instagram','youtube','missao','visao', 'valores,imagem1,imagem2'];

    use SoftDeletes;
}
