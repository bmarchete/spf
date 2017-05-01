<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Classificacao;
use App\Equipe;
use App\Posicao;
use Illuminate\Http\Request;

use App\Http\Requests;

class ClassificacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $atividades = Atividade::query()->where('pontua', '=', '1')->get();
        $equipes = Equipe::all();
        $posicoes = Posicao::all();

        return view('/adm/cadastro/classificacao', compact('atividades','equipes','posicoes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //esta deixando cadastrar atividade com posição duas vezes
        $input = $request->all();

        try{
            Classificacao::create($input);
        }catch (\Exception $e)
        {
            return redirect()->back()->withErrors("Essa opção não é valida");
        }

        flash()->success('Pontuacao cadastrada com sucesso');

        return redirect('/admspf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
