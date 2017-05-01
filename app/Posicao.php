<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posicao extends Model
{
    protected $table = 'posicoes';
    protected $primaryKey = ['posicao','atividade_codigo'];
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['posicao','atividade_codigo','pontuacao'];
}
