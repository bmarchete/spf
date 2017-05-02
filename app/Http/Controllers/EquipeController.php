<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipes;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipes::all();


        return view('public.equipe', compact('equipes'));
    }
}
