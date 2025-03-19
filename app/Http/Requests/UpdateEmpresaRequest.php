<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmpresaRequest extends FormRequest
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
           "rfc"=>"required|max:15|min:12",
        ];
    }
    public function messages(): array
    {
        return [
            "rfc.required"=>"Es necesario poner un rfc",
            "rfc.max" => "El RFC no puede tener más de 13 caracteres.",
            "rfc.min" => "El RFC no puede tener menos de 12 caracteres.",
            
        ];
    }
}
