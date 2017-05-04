<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipe;
use App\Atividade;


class IndexController extends Controller
{

    public  function __construct()
    {
        $this->middleware('show.points');
    }
    
    public function index()
    {
        $equipes = Equipe::all();

        return view('public.index', compact('equipes'));
    }

     public function queryByAtividades()
    {
        
        return $atividades = Atividade::with(['classificacaos.users','classificacaos.equipe'])
                        ->get();
        return view('public.atividades', compact('atividades'));

    }

    public function queryByEquipes(Equipe $equipe)
    {
        return 'ok';
        return view('public.equipe', compact('equipe'));
        
    }

    public function palavras()
    {
        return view('public.palavras');
    }

     public function sobre()
    {
        return view('public.sobre');
    }


}
