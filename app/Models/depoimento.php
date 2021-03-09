<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;

class Depoimento extends Model
{
    protected $table = 'depoimentos';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id',
    'nome',
    'texto',
    'imagem',
    'descricao'
    ];

    use SoftDeletes, CascadeSoftDeletes;
}
