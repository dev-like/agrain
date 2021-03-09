<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use App\Models\Linha;

class Produto extends Model
{
    use SoftDeletes, CascadeSoftDeletes;

    protected $table = 'produtos';
    protected $fillable = ['nome',
    'descricao',
    'indicacoes',
    'mododeusar',
    'imagem',
    'logo',
    'informacoesnutricionais',
    'slug'
  ];
    protected $dates = ['deleted_at'];

    public function informacaonutricional()
    {
        return $this->hasMany('App\Models\Informacaonutricional');
    }
}
