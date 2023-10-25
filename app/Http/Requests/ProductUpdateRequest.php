<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required|max:50',
            'detail' => 'required',
            'price' => 'required',
            'photo' => 'nullable|mimes:jpeg,png,jpg,gif|max:2000',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'required' => ':attribute field is required.',
            'unique' => ':attribute has already been taken.',
            'numeric' => ':attribute must be a number.',
            'image' => ':attribute must be an image.',
            'mimes' => ':attribute must be a file of type: :values.',
            'max' => ':attribute may not be greater than :max kilobytes.',
        ];
    }

    public function attributes()
    {
        $attr = [
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'detail' => 'Detail',
            'price' => 'Price',
        ];

        return $attr;
    }
}
