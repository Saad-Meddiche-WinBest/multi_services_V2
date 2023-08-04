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
            'title' => 'required|max:255|unique:societies,title',
            'ice' => 'required|numeric|unique:societies,ice',
            'adress' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image',
            'telephone' => 'required|unique:societies,telephone',
            'fax' => 'nullable|unique:societies,fax',
            'web_link' => 'nullable|url|unique:societies,web_link',
            'facebook' => 'nullable|url|unique:societies,facebook',
            'instagram' => 'nullable|url|unique:societies,instagram',
            'twitter' => 'nullable|url|unique:societies,twitter',
            'linkdin' => 'nullable|url|unique:societies,linkdin',
            'coordinations' => 'nullable|unique:societies,coordinations',
            'video' => 'nullable',
            'email' => 'required|email|unique:societies,email',
            'categorie_id' => 'required|exists:categories,id',
            'services' => 'required',
            'cities' => 'required',
            'tags' => 'required',
        ];

        if ($this->method() === 'PUT' || $this->method() === 'PATCH') {
            $id = $this->route('id');
            $rules['title'] .= ',' . $id;
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
            $rules['image'] = 'nullable|image';
        }

        return $rules;
    }
}
