<?php

namespace Modules\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Auth\Contracts\Authentication;

class UpdateProfileRequest extends FormRequest
{
    public function rules()
    {
        $userId = app(Authentication::class)->id();

        return [
            'email' => "required|email|unique:users,email,{$userId}",
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'confirmed',
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }
}
