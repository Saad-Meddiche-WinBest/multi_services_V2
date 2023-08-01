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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'sometimes|string|min:8|confirmed',
            'roles' => 'required',
            'roles.*' => 'exists:roles,id',
        ];

        if ($this->method() === 'PUT' || $this->method() === 'PATCH') {
            $id = $this->route('id');
            $rules['email'] .= ',' . $id;
        }

        return $rules;
    }
}
