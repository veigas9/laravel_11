<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends StoreUserRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = parent::rules();
        // Modifica a regra de validação do email para ignorar o usuário atual
        // $rules['email'] = 'required|email|unique:users,email,' . $this->route('user');
        $rules['password'] = [
            'nullable',
            'string',
            'min:6',
            'max:20'
        ];
        return $rules;
       
    }
}
