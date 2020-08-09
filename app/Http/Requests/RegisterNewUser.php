<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterNewUser extends FormRequest
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
            'nameU' => ['required', 'string', 'max:255'],
            'emailU' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'passwordU' => ['required', 'string', 'min:8', 'confirmed']
        ];
    }

    public function messages()
{
    return [
        'nameU.required' => 'Ingresa tu nombre',
        'emailU.email' => 'Ingresa tu correo electronico',
    ];
}
}
