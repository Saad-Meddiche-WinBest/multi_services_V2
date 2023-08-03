<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
        $data = $this->all();

        $societieId = $data['societie_id'];
        $dayId = $data['day_id'];

        $rules = [
            'societie_id' => 'required|exists:societies,id',
            'day_id' => [
                'required',
                'exists:days,id',
                Rule::unique('schedules')->where(function ($query) use ($societieId, $dayId) {
                    return $query->where('societie_id', $societieId)->where('day_id', $dayId);
                })
            ],
            'from' => 'required',
            'until' => 'required|after:from',
        ];


        return $rules;
    }
}
