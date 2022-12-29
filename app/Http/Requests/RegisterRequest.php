<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class RegisterRequest extends FormRequest
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
            'email'=> 'required|unique:users,email',
            'name'=> 'required|string|max:255',
            'role'=> 'required|string:"usuario", "admin"',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return[
            'email.required' => '*Debe ingresar una dirección de correo electrónico.',
            'email.unique' => '*Dirección de correo electrónico existente. Intenta ingresar un correo diferente.',
            'name.required'=>'*Debe ingresar un nombre.',
            'username.required'=>'*Debe ingresar un nombre de usuario.',
            'username.unique'=>'*Nombre de usuario existente.Intenta ingresar un nombre de usuario diferente.',
            'role.required'=>'*Debe asignar el tipo de rol del usuario.',
            'password.required'=>'*Debe ingresar una contraseña (mínimo 8 caracterés).',
            'password.min'=>'*La contraseña debe tener mínimo 8 caracterés.',
            'password_confirmation.same'=>'*Confirmación de contraseña incorrecta',
            'password_confirmation.required'=>'*Es necesario repetir la contraseña',


            
        ];
    }
}
