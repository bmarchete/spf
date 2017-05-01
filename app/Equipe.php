<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Equipe extends Model
{
    protected $table = 'equipe';
    protected $primaryKey = 'codigo';
    public $timestamps = false;

    protected $guarded = ['codigo'];

    public function salas()
    {
        return $this->hasMany('App\Sala', 'equipe_codigo');
    }


}
