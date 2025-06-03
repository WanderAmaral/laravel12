<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $user = $this->route('user');
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . ($user ? $user->id : null),
            'password' => 'required_if:password,!=,null|min:6',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.string' => 'O campo nome deve ser uma string',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um email',
            'email.unique' => 'O campo email já está em uso',
            'password.required_if' => 'O campo senha é obrigatório',
            'password.min' => 'A senha deve ter no mínimo :min caracteres',
        ];
    }
}
