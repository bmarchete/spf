<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'salas';
    protected $primaryKey = 'codigo';
    public $timestamps = false;

    protected $guarded = ['codigo'];
}
