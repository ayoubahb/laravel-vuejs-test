<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
        return [
            'name'=> 'required|string',
            'category_id'=> 'required|exists:categories,id',
            'image'=> 'required',
            'description'=> 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'category_id.required' => 'The category ID field is required.',
            'category_id.exists' => 'The selected category ID is invalid.',
            'image.required' => 'The image field is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image size must not exceed 2048 kilobytes.',
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',
        ];
    }
}
