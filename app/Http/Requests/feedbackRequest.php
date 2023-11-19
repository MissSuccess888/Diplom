<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class feedbackRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'Required|min:3|max:30',
            'feedbackText' => 'Required|min:10|max:3000',
        ];
    }

		 public function messages()
    {
        return [
            'feedbackText.min' => "Поле для ввода текста должно содержать минимум 10 символов",
            'feedbackText.max' => "Поле для ввода текста должно содержать не более 3000 символов",
            'email.required' => "Поле Email должо быть заполнено",
            'feedbackText.required' => "Поле для ввода текста должо быть заполнено",
        ];
}
}