<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpresaRequest extends FormRequest
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
            "giro"=>"required",
            "rfc"=>"required|max:15|min:12",
            "direccion"=>"required",
            "telefono"=>"required|numeric",
            "correo"=>"required|email",
            "titular"=>"required",
            "puesto_titular"=>"required",
            //"asesor_externo"=>"required",
            //"puesto_asesor"=>"required",
            "informacion"=>"required",
        ];
    }

    public function messages(): array
    {
        return [
            "nombre.required"=>"Es necesario colocar un nombre",
            "giro.required"=>"Es necesario escoger un giro",

            "rfc.required"=>"Es necesario poner un rfc",
            "rfc.max" => "El RFC no puede tener más de 13 caracteres.",
            "rfc.min" => "El RFC no puede tener menos de 12 caracteres.",

            "direccion.required"=>"Es necesario poner la direccion de la empresa",

            "telefono.required"=>"Es necesario poner un numero de telefono",
            "telefono.numeric" => "El campo teléfono solo puede contener números",
            "telefono.max" => "El Telefono no puede tener más de 10 caracteres.",
            "telefono.min" => "El Telefono no puede tener menos de 10 caracteres.",

            "correo.required"=>"Es necesario poner un correo electronico",
            "correo.email" => "El correo debe ser una dirección de correo válida.",


            "titular.required"=>"Es necesario indicar quien es el titular de la empresa",
            "puesto_titular.required"=>"Es necesario indicar el puesto del titular de la empresa",
            //"asesor_externo.required"=>"Es necesario llenar este campo",
            //"puesto_asesor.required"=>"Es necesario llenar este campo",
            "informacion.required"=>"Por favor indique informacion de la empresa",
            
        ];
    }
}
