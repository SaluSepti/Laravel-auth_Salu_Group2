<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
    public function rules()
{
    $validate = [
        'image' => 'required|image|mimes:jpeg,jpg,png|max:2048', // Aturan validasi untuk gambar
        'name' => 'required|string',
        'weight' => 'required|integer',
        'price' => 'required|integer',
        'condition' => 'required|in:Bekas,Baru',
        'stock' => 'required',
        'description' => 'required|max:2000',
    ];

       return $validate;
    }

}

