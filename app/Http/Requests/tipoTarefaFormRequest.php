<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tipoTarefaFormRequest extends FormRequest
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
            'desc'=>'required|min:3'
        ];
    }
    public function messages()
    {
        return [
            'desc.required' => 'O campo nome não pode ser vazio',
            'desc.min' => 'O campo nome tem que ter pelo menos 3 cracteres'
        ];
    }
}
