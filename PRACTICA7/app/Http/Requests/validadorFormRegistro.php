<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorFormRegistro extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'isbn' => 'required|numeric|digits:13', 
            'paginas' => 'required|numeric', 
            'email_editorial' => 'required|email', 
        ];
    }
}
