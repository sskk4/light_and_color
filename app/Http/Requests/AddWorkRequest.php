<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddWorkRequest extends FormRequest
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
        return [

            'image_style' => 'required|string|min:5|max:255',
            'painting_time' =>'required|integer|min:1|max:60',
            'canvas_quality'=>'required|integer|min:0|max:3',
            'paint_quality'=>'required|integer|min:0|max:3',

        ];
    }
}
