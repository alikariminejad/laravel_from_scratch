<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            'title' => ['required', 'string', 'unique:posts,title,'],
            'description' => ['nullable', 'string'],
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Please fill in the title field.',
            'title.min' => 'Please use at least 3 characters.',
            'title.unique' => 'Please use unique title.',
        ];
    }
    public function attributes(){
        return [
            'title'       => 'Post title',
        ];
    }
}
