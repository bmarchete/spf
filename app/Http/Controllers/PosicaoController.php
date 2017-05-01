<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Posicao;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;



class PosicaoController extends Controller
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

        return view('/adm/cadastro/posicao', compact('atividades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'atividade_codigo' => 'required|int',
            'posicao.*' => 'required|int'
        ]);

        try{
        DB::transaction(function () {

            $atividade = Input::get('atividade_codigo');
            $posicoes = Input::get('posicao');


                foreach ($posicoes as $key => $pontuacao) {
                    Posicao::create([
                        'posicao' => ($key + 1),
                        'atividade_codigo' => $atividade,
                        'pontuacao' => $pontuacao
                    ]);


                }


        });
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Erro ao inserir pontuação');
        }

        flash()->success('Pontuação cadastrada com sucesso');

        return redirect(route('index.adm'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
