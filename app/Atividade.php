<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{

    protected $table = 'atividade';
    protected $primaryKey = 'codigo';
    public $timestamps = false;

    protected $guarded = ['codigo'];
}
