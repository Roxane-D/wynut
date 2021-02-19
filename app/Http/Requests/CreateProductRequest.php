<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name' => 'required|max:50|unique:products',
            'price' => 'required|between:1,600',
            'stock' => 'required|between:1,100',
            'description' => 'required|max:255',
            'image' => 'required|max:255',
            'weight' => 'required|min:1',
            'category_id' => 'required',
        ];
    }
}
