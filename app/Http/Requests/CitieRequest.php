<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitieRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:cities,name',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ];

        if ($this->method() === 'PUT' || $this->method() === 'PATCH') {
            $id = $this->route('id');
            $rules['name'] .= ',' . $id;
        }

        return $rules;
    }
}
