<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTypesRequest extends FormRequest
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
            'en.title'=>'required',
            'ru.title'=>'required',
            'ge.title'=>'required',
            'en.description'=>'required',
            'ru.description'=>'required',
            'ge.description'=>'required',
            'category.id'=>'required',
        ];
    }
}
