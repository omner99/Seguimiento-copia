<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstudianteRequest extends FormRequest
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
            "nombre"=>"required",
            "apellido_paterno"=>"required",
            "correo_electronico"=>"required|email",
            "numero_de_control"=>"required|max_digits:8|min_digits:3|gt:555",
            "telefono"=>"required|numeric|max_digits:10|min_digits:10",
            "direccion"=>"required",
            "numero_de_seguridad_social"=>"required",
            "contraseña"=>"required",
        ];
    }

    public function messages(): array
    {
        return [
            "nombre.required"=>"Por favor, ingrese su nombre",
            "apellido_paterno.required"=>"Por favor, ingrese su apellido paterno",
            "correo_electronico.required"=>"Por favor, ingrese su correo electronico",
            "correo_electronico.email" => "Por favor, introduce un correo electrónico válido.",
            "numero_de_control.required"=>"Por favor, ingrese su numero de control",
            "numero_de_control.numeric"=>"Este Campo debe ser un Numero",
            "numero_de_control.max_digits"=>"Este Campo admite maximo 8 digitos",
            "numero_de_control.min_digits"=>"Este Campo admite minimo 3 digitos",
            "numero_de_control.gt"=>"Este Campo debe ser mayor que 555",
            "telefono.required"=>"Es necesario Poner el Numero de Telefono",
            "telefono.numeric"=>"Este Campo debe ser un Numero",
            "telefono.max_digits"=>"Este Campo admite maximo 10 digitos",
            "telefono.min_digits"=>"Este Campo admite minimo 10 digitos",
            "direccion.required"=>"Por favor, ingrese su direccion",
            "numero_de_seguridad_social.required"=>"Por favor, ingrese su numero de seguridad social",
            "contraseña"=>"Por favor, ingrese una contraseña",
        ];
    }
}
