<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorFormRecuerdos extends FormRequest
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
            'isbn' => 'required|numeric|digits:13', // ISBN: Validación de solo números y mínimo 13 dígitos
            'paginas' => 'required|numeric', // Páginas: Validación de solo números
            'email_editorial' => 'required|email', // Email de Editorial: Validación de formato de correo
        ];
    }
}
