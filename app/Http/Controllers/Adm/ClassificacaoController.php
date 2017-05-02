<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Classificacao;
use App\Equipe;
use App\Atividade;
use App\Posicao;

class ClassificacaoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $atividades = Atividade::all();
        $equipes = Equipe::all();
        $posicoes = Posicao::all();

        return view('adm.classificacoes.index', compact('atividades','equipes','posicoes'));
    }

    public function store(Request $request)
    {

        
        $input = $request->all();
        $input['user'] = Auth::user()->id;


        //não permite cadastrar duas vezes uma mesma posição para uma mesma atividade

        if ($request->posicoes_posicao != -1) {
            $testePosicao = Classificacao::
                        where('posicoes_atividade_codigo', '=', $input['posicoes_atividade_codigo'])
                        ->where('posicoes_posicao', '=', $input['posicoes_posicao'])->get();
            
            if (count($testePosicao)) {
                 return redirect()->back()->with('errors',"Esta configuração não é válida");
            }
        }

        //----------
             

        try{
             Classificacao::create($input);
        }catch (\Exception $e)
        {
            return redirect()->back()->with('errors',"Essa opção não é valida");
        }

        return redirect()->route('adm-index')->with('status', 'Classificação Salva com Sucesso!');
    }

    public function storeAjax(Request $request)
    {

        
        $input = $request->all();
        $input['user'] = Auth::user()->id;
       // return $input;

        //não permite cadastrar duas vezes uma mesma posição para uma mesma atividade

        if ($request->posicoes_posicao != -1) {
            $testePosicao = Classificacao::
                        where('posicoes_atividade_codigo', '=', $input['posicoes_atividade_codigo'])
                        ->where('posicoes_posicao', '=', $input['posicoes_posicao'])->get();
            
            if (count($testePosicao)) {
             return \Response::make('Esta configuração não é válida', 400);
                
                 return redirect()->back()->with('errors',"Esta configuração não é válida");
            }
        }

        //----------
             

        try{
             Classificacao::create($input);
        }catch (\Exception $e)
        {
             return \Response::make('Essa opção não é valida', 400);
            return redirect()->back()->with('errors',"Essa opção não é valida");
        }
        return \Response::make('Classificação Salva com Sucesso!', 200);
        return redirect()->route('adm-index')->with('status', 'Classificação Salva com Sucesso!');
    }

    public function queryByAtividades()
    {
        
        
        $atividades = Atividade::with(['classificacaos.users','classificacaos.equipe'])
                        ->get();
        return view('adm.classificacoes.atividades', compact('atividades'));
        
        

    }

    public function queryByEquipes()
    {
         $equipes = Equipe::with(['classificacaos.users','classificacaos.atividade'])->get();
        return view('adm.classificacoes.equipes', compact('equipes'));
        
    }
}
