<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioStoreRequest extends FormRequest
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
            'nome' => ['required', 'min:3', 'max:50'],
            'email' => ['required', 'email', 'unique:usuario,email,'.$this->route('id')],
            'data_nascimento' => ['required'],
            'nivel_id' => ['required'],
        ];
    }

    public function messages() {
        return [
            'required' => 'O campo :attribute é obrigatório!',
        ];
    }
}
