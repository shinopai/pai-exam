<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'start_date' => 'required|date_format:Y-m-d|after:today',
            'end_date' => 'required|date_format:Y-m-d|after_or_equal:start_date',
            'category' => 'required',
            'type' => 'required'
        ];
    }
}
