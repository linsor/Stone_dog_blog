<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'NamePost' => 'required|string',
            'Content' => 'required|string',
            'date' => date('Y-m-d H:i:s'),
            'like' => 'integer',
            'PostImage' => 'nullable|file',
            'NameGame' => 'string',
            'Author' => 'integer',
            'category_id' => 'integer',
            'tags' => ''
        ];

    }
}
