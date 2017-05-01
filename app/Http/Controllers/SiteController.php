<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Equipe;
use App\Sala;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

    public  function __construct()
    {
        $this->middleware('show.points');
    }

    public function index(Request $request)
    {
        $equipes = Equipe::all();

        return view('site.index', compact('equipes'));

    }

    public function atividades()
    {
        $atividades = Atividade::orderBy('horario_inicio', 'desc')->get();

        return view('site.atividade', compact('atividades'));


    }

    public function sobre()
    {
        return view('site.sobre');
    }

    public function equipes()
    {
        $equipes = Equipe::query()->with('salas')->get();


        return view('site.equipe', compact('equipes'));
    }

    public function atividadesDetalhe($id)
    {

        $atividade = Atividade::query()->findOrFail($id);

        return view('site.atividadeDetalhe', compact('atividade'));
    }


}
