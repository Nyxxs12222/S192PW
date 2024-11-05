<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorP extends FormRequest
{
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
            'txtcorreo'=>'required|email:rfc,dns',
            'txtcontraseña'=>'required',
            'txtedad'=>'required|numeric',
        ];
    }
}

