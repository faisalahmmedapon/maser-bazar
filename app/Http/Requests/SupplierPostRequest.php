<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierPostRequest extends FormRequest
{public function authorize(): bool
{
    return true;
}

    public function rules()
    {
        return [
            'name'=> 'required|max:200',
            'email' => 'nullable',
            'phone' => 'required|numeric',
            'address' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'details' => 'string|max:3000|nullable',
        ];
    }

    public function messages()
    {
        return [
            'name' => [
                'required' => 'Supplier name is required!',
                'max' => 'Supplier name is too long!',
            ],
            'email' => [
                'required' => 'Supplier email is nullable!',
            ],
            'phone' => [
                'required' => 'Supplier phone number is required!',
                'numeric' => 'Please Provide Numeric',
            ],
            'address' => [
                'required' => 'Supplier home address is required!',
            ],
            'photo' => [
                'nullable' => 'Supplier photo is nullable!',
                'mimes' => 'Please Provide jpeg,png,jpg max 2mb file',
            ],
            'details' => [
                'nullable' => 'Supplier details is nullable!',
            ],
        ];
    }
}
