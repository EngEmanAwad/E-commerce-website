<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            //
            'productName'=>'required',
'desc'=>'required',
'quantity'=>'required',
'price'=>'required',

        ];
    }

    public function messages()
    {
        return [
            'productName.required' => 'product Name is required',
            'desc.required' => 'Product Description is required',
            'quantity.required' => 'Product Quantity is required',
            'price.required' => 'Product Price is required',
        ];
    }





















}
