<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nombre_usuario"=>"requiered",
            "contraseña"=>"required",
        ];
    }

    public function messages(): array
    {
        return [
            "nombre_usuario.required"=>"Por favor ingrese su correo electronico",
            "contraseña.required"=>"Por favor ingresa una contraseña",
            
        ];
    }
}