<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessaoRequest extends FormRequest
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
            'dataInicio'=>'required',
            'status'=>'required',
            'filme'=>'required',
            'sala'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'dataInicio.required'=>'Insira uma Data',
            'status.required'=>'Escolha um Status',
            'filme.required'=>'Escolha um Filme',
            'sala.required'=>'Escolha uma Sala'
        ];
    }
}
