<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfile extends FormRequest
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
            'name' => 'string|max:40',
            'email' => 'email|max:100',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'Il campo nome deve contenere solo lettere',
            'name.max' => 'Il campo nome deve essere lungo al massimo 40 caratteri',
            'email.email' => 'Il campo email deve essere un indirizzo email',
            'email.max' => 'Il campo email deve essere lungo al massimo 100 caratteri',
        ];
    }
}
