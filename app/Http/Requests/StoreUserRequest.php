<?php

namespace App\Http\Requests;

use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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

            'name' => ['required', new FullName],
            'email' => 'required',
            'cpf' => 'required|cpf|formato_cpf',
            'modalidade' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'cep' => 'required|formato_cep',
            'numero' => 'required',
            'cidade' => 'required',
            'estado' => 'required',

        ];
    }
    public function messages()
    {
        return[
            'name.required'=> 'o campo nome é obrigatorio',
            'email.required'=> 'o campo email é obrigatorio',
            'cpf.required'=> 'o campo cpf é obrigatorio',
            'modalidade'=> 'o campo modalidade é obrigatorio',

        ];
    }
}
