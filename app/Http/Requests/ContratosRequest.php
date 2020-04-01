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
                'dtAprovação' => 'required|max:45',
                'skCliente' => 'required|max:45',
                'Categoria' => 'required|max:45',
                'Descrição' => 'required|max:45',
                'skGerente' => 'required|max:45',
                'Segmento' => 'required|max:45',
                'skTipoProposta' => 'required|max:45',
                'skGrupo' => 'required|max:45',
                'Regional' => 'required|max:45',
                'Validade' => 'required|max:45',
                'ValorAprovado' => 'required|max:45',
                'Limite_Utilizado' => 'required|max:45',
                'Probabilidade_Saque' => 'required|max:45',
                'Previsão_Saque' => 'required|max:45',
                'Observações' => 'required|max:45',
                'Descrição' => 'required|max:45',
         ];
    }

    public function messages()
    {
        return [
            'dtAprovação.required' => 'O data de aprovação é obrigatória',
            'skCliente.required' => 'O cliente é obrigatório',
            'Categoria.required' => 'A categoria é obrigatória',
            'Descrição.required' => 'A descrição é obrigatória',
            'skGerente.required' => 'O gerente é obrigatório',
            'Segmento.required' => 'O segmento é obrigatório',
            'skTipoProposta.required' => 'O tipo da proposta é obrigatório',
            'skGrupo.required' => 'O grupo é obrigatório',
            'Regional.required' => 'A regional é obrigatória',
            'Validade.required' => 'A validade é obrigatória',
            'ValorAprovado.required' => 'O valor aprovado é obrigatório',
            'Limite_Utilizado.required' => 'O limite utilizado é obrigatório',
            'Probabilidade_Saque.required' => 'A probabilidade de saque é obrigatória',
            'Previsão_Saque.required' => 'A previsão de saque é obrigatória',
            'Observações.required' => 'Observações obrigatórias',
            'Descrição.required' => 'required|max:45',
        ];
    }
}
