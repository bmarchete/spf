<?php

namespace App\Http\Controllers;

use App\Http\Requests\AtividadeRequest;
use App\Posicao;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Carbon::setLocale(config('app.locale'));

        return view('adm.consulta.atividade')->with('atividades', Atividade::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/adm/cadastro/atividade');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AtividadeRequest $request)
    {


        $input = $request->all();

        $input['ano'] = Carbon::today()->format('Y');

        $input['wo'] = - $input['wo'];
        //deveria conter uma transaction aqui

        // $codigo = Atividade::create($input)->codigo;
        $codigo = Atividade::create();

        Posicao::create([
            'posicao' => -1,
            'atividade_codigo' => $codigo,
            'pontuacao' => $input['wo']
        ]);

        flash()->success('Atividade cadastrada com sucesso');


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
        $atividade = Atividade::query()->findOrFail($id);


        try {
            $atividade->delete();
            flash()->success('Atividade excluída');
        } catch (\Exception $e) {
            flash()->error('Atividade não pode ser excluída');
        }finally{
            return redirect(route('atividades.show'));
        }
    }
}
