<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Repositories\PontuacaoRepository;
use Illuminate\Foundation\Auth\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PontuacaoController extends Controller
{
    public  function __construct()
    {
        $this->middleware('show.points');
    }

    public function index()
    {
        $pontuacoes = PontuacaoRepository::pontuacaoGeral();

        return view('public.placar', compact('pontuacoes'));
        
    }

    public function porEquipe()
    {


        $equipes = Equipe::all();


        for ($i = 0; $i < count($equipes); $i++) {
            $pontuacoes = PontuacaoRepository::pontuacaoEquipe($equipes[$i]->codigo);

            $equipes[$i]->pontuacoes = $pontuacoes;

        }


            return view('public.site.pontuacao_equipe', compact('equipes'));
      

    }

    public function porEquipeId($id)
    {

        $equipe = Equipe::query()->findOrFail($id);


        try {
            $pontuacoes = PontuacaoRepository::pontuacaoEquipe($equipe->codigo);

            $equipe->pontuacoes = $pontuacoes;
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Erro ao consultar pontuação. Talvez não exista nenhuma!');
        }

       return view('public.pontuacao_equipe_id', compact('equipe'));
       
    }


    public function total()
    {

        $total = PontuacaoRepository::total();

        return view('public.fim', compact('total'));
     
    }
}
