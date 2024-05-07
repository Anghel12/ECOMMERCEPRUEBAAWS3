<?php

namespace App\Http\Requests\Admin\ECommerce;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
          /*   'user_id' => 'required|exists:users,id', */
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'previous_price' => 'nullable|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'status' => 'required|in:active,inactive,out_of_stock',
            'featured' => 'boolean',
            
        ];
    }
}
