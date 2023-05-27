<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
          'name' => 'required|string',
          'surname' => 'nullable|string',
          'patronymic' => 'nullable|string',
          'age' => 'nullable|integer',
          'gender' => 'nullable|string',
          'address' => 'nullable|string',
          'email' => 'required|string',
          'password' => 'required|string|confirmed',
        ];
    }
}