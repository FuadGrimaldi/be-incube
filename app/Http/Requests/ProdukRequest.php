<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
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
            'id' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tinggi' => 'required|numeric',
            'lebar' => 'required|numeric',
            'kapasitas' => 'required|numeric',
            'telur' => 'required|numeric',
            'price' => 'required|numeric',
            'active' => 'boolean',
            'image' => 'nullable|image|max:2048', // Optional image field
        ];
    }
}
