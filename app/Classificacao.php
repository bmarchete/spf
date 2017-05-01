<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    protected $table = 'classificacao';
    protected $primaryKey = ['equipe_codigo','posicoes_atividade_codigo','posicoes_posicao'];
    public $timestamps = false;
    public $incrementing = false;
    public $fillable = ['equipe_codigo','posicoes_atividade_codigo', 'posicoes_posicao'];
}
