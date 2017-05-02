<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    protected $primaryKey = ['equipe_codigo','posicoes_atividade_codigo','posicoes_posicao'];
    
    public $timestamps = false;
    public $incrementing = false;

    public $fillable = ['equipe_codigo','posicoes_atividade_codigo', 'posicoes_posicao', 'user'];

    public function atividade()
    {
        return $this->belongsTo(Atividade::class, 'posicoes_atividade_codigo', 'codigo');
    }
   
    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'equipe_codigo', 'codigo');
    }
   
    public function users()
    {
        return $this->belongsTo(User::class, 'user');
    }

}
