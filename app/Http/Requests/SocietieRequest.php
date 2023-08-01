<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocietieRequest extends FormRequest
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
            'title' => 'required|max:255',
            'ice' => 'required|numeric|unique:societies,ice',
            'adress' => 'required|max:255',
            'description' => 'required',
            'image' => 'sometimes|image',
            'telephone' => 'required|unique:societies,telephone',
            'fax' => 'nullable|unique:societies,fax',
            'web_link' => 'required|url|unique:societies,web_link',
            'facebook' => 'required|url|unique:societies,facebook',
            'instagram' => 'required|url|unique:societies,instagram',
            'twitter' => 'required|url|unique:societies,twitter',
            'linkdin' => 'required|url|unique:societies,linkdin',
            'coordinations' => 'required|unique:societies,coordinations',
            'video' => 'required',
            'email' => 'required|email|unique:societies,email',
            'categorie_id' => 'nullable|exists:categories,id',
            'services' => 'required',
            'cities' => 'nullable',
            'tags' => 'nullable',
        ];

        if ($this->method() === 'PUT' || $this->method() === 'PATCH') {
            $id = $this->route('id');
            $rules['ice'] .= ',' . $id;
            $rules['telephone'] .= ',' . $id;
            $rules['fax'] .= ',' . $id;
            $rules['web_link'] .= ',' . $id;
            $rules['facebook'] .= ',' . $id;
            $rules['instagram'] .= ',' . $id;
            $rules['twitter'] .= ',' . $id;
            $rules['linkdin'] .= ',' . $id;
            $rules['coordinations'] .= ',' . $id;
            $rules['email'] .= ',' . $id;
        }

        return $rules;
    }
}
