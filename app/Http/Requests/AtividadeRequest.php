<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AtividadeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'descricao' => 'required',
            'horario_inicio' => 'required',
            'horario_termino' => 'required',
            'local' => 'required',
            'wo' => 'required|int|min:0',

        ];
    }
}
