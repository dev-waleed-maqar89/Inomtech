<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
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
            'name_en' => ['required', 'string', 'max:255'],
            'name_ar' => ['required', 'string', 'max:255'],
            'content_en' => ['required', 'string'],
            'content_ar' => ['required', 'string'],
            'link' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:4096'],
            'department_id' => ['required', 'exists:departments,id'],
        ];
    }

    public function messages()
    {

        return [
            'name_en.required' => 'You should enter project name in English',
            'name_ar.required' => 'You should enter project name in Arabic',
            'content_en.required' => 'You should enter project description in English',
            'content_ar.required' => 'You should enter project description in Arabic',
        ];
    }
}