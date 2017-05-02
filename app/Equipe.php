<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Equipe extends Model
{
    protected $primaryKey = 'codigo';
    public $timestamps = false;

    protected $guarded = ['codigo'];

    public function classificacaos()
    {
        return $this->hasMany(Classificacao::class, 'equipe_codigo', 'codigo');
    }


}
