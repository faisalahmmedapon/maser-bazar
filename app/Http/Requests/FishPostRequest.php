<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FishPostRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:fish|max:225',
            'weight' => 'required',
            'rate' => 'required|numeric|between:1,99999999999999.99',
            'amount' => 'required',
            'details' => 'string|max:3000|nullable',
        ];
    }

    public function messages()
    {
        return [
            'name' => [
                'required' => 'Fish name is required!',
                'max' => 'Fish name is too long!',
                'unique' => 'Already Exit this Fish name . Please provide unique Fish Name!',
            ],
            'weight' => [
                'required' => 'Fish weight is required!',
            ],
            'rate' => [
                'required' => 'Fish weight is required!',
                'numeric' => 'Please Provide Numeric',
            ],
            'amount' => [
                'required' => 'Fish weight is required!',
            ],
            'details' => [
                'nullable' => 'Fish details is nullable!',
            ],
//            'name.required' => 'The name is required',
//            'weight.required' => 'The weight is required',
//            'rate.required' => 'The rate is required',
//            'amount.required' => 'The amount is required',
//            'details.required' => 'The details is required'
        ];
    }

}
