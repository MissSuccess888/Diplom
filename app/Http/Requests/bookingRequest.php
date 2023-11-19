<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class bookingRequest extends FormRequest
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
           'name' => 'Required|min:3|max:100',
					 'phone' => 'Required|min:6|max:14', 
           'email' => 'Required|min:3|max:30',
					 'number' => 'Required|min:1|max:4',
					 'date' => 'Required', 
           'message' => 'Required|min:10|max:3000', 
         ];
}

		public function messages()
    { 
			  return [
						'name.min' => "Поле для ввода имени должно содержать минимум 3 символа",
            'name.max' => "Поле для ввода имени должно содержать не более 100 символов",
						'name.required' => "Поле для ввода имени должно быть заполнено",
						'phone.min' => "Введите номер телефона корректно (например +7(905)123456)",
            'phone.max' => "Введите номер телефона корректно (например +7(905)123456)",
            'phone.required' => "Поле для ввода номера телефона должно содержать 11 цифр",
            'email.required' => "Поле Email должо быть заполнено",
						'number.required' => "Поле для ввода количества гостей должно быть заполнено",
						'date.required' => "Поле для ввода даты должно быть заполнено",
						'message.min' => "Поле для ввода текста должно содержать минимум 10 символов",
            'message.max' => "Поле для ввода текста должно содержать не более 3000 символов",
            'message.required' => "Поле для ввода текста должо быть заполнено",
				 ];
}
}
