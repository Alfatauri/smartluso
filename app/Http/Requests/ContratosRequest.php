<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContratosRequest extends FormRequest
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
            'Descrição' => 'required|max:45',
         ];
    }

    public function messages()
    {
        return [
        'Descrição.required' => 'O campo descrição é obrigatório',
        ];
    }
}
