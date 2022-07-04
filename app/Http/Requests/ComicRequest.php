<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required | min:3 | max:80 ',
            'image' => 'required | max:255',
            'type' => 'required | min:3 | max:30',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è vuoto',
            'title.min' => 'Inserire almeno :min caratteri',
            'title.max' => 'Massimo caratteri :max',
            'image.required' => 'Il campo image è vuoto',
            'image.max' => 'Massimo caratteri :max',
            'type.required' => 'Il campo type è vuoto',
            'type.min' => 'Inserire almeno :min caratteri',
            'type.max' => 'Massimo caratteri :max',
        ];
    }
}
