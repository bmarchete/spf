<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    public function classificacaos()
    {
        return $this->hasMany(Classificacao::class, 'posicoes_atividade_codigo', 'codigo');
    }
}
