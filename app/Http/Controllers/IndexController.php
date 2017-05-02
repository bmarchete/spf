<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipe;
use App\Atividade;


class IndexController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();

        return view('public.index', compact('equipes'));
    }

     public function queryByAtividades()
    {
        
        
        $atividades = Atividade::with(['classificacaos.users','classificacaos.equipe'])
                        ->get();
        return view('public.atividades', compact('atividades'));
        
        

    }

    public function queryByEquipes(Equipe $equipe)
    {
        return view('public.equipe', compact('equipe'));
        
    }


}
