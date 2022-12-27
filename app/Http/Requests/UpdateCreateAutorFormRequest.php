<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCreateAutorFormRequest extends FormRequest
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
                'min:5',
                "unique:autor,nome,{$id},id"
            ],
            'cpf' => [
                'required',
                'string',
                'max:11',
                'min:11',
                "unique:autor,cpf,{$id},id"
            ],
            'dataNascimento' => [
                'required'
            ]

            
        ];
    }
}
