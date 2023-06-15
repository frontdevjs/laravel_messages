<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'email.required' => 'Поле email является обязательным',
            'email.email' => 'Некорректные данные в поле email',
            'subject.required' => 'Поле тема сообщения является обязательным',
            'subject.min' => 'В поле "Тема сообщения" должно быть минимум 5 символов',
            'message.required' => 'В поле "Сообщение" является обязательным',
            'message.min' => 'В поле "Сообщение" должно быть минимум 15 символов',
        ];
    }
}
