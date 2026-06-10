<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class IdeaRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'descreption' => ['required', 'min:7'],
        ];
    }

    #[Override]
    public function messages(): array
    {
        return [
            'descreption.required' => 'fill the form with something atleast. lazy',
            'descreption.min' => 'atleast :min characters. your input is ":input" the field is ":attribute"',
            'descreption.max' => 'not more than '
        ];
    }
}
