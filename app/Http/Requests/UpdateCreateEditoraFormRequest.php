<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCreateEditoraFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ?? '';
        return [
            'nome' => [
                'required',
                'string',
                'max:255',
                'min:1',
                "unique:editora,nome,{$id},id"
            ],
            'cnpj' => [
                'required',
                'string',
                'max:14',
                'min:14',
                "unique:editora,cnpj,{$id},id"
            ],
            'dataCriacao' => [
                'required'
            ]
        ];
    }
}
