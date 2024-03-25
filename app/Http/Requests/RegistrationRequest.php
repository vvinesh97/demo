<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegistrationRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name' => ['required', 'min:3', 'max:20'],
            'last_name' => ['required', 'min:1', 'max:20'],
            'email' => ['required', 'email', 'unique:users'],
            'phone_number' => ['required', 'string', 'regex:/^[0-9]{10}$/','unique:users'],
            'password' => ['required', 'min:5', 'max:12'],
            'confirmPassword' => ['required','same:password'],
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => 'Please Enter First Name',
            'first_name.min:3' => 'First Name Contain Atleast 3 Characters Long',
            'first_name.max:20' => 'First Name Contain maximum 20 Characters Long',
            'last_name.required' => 'Please Enter Last Name',
            'last_name.min:1' => 'Last Name Contain Atleast 1 Characters Long',
            'last_name.max:20' => 'Last Name Contain maximum 20 Characters Long',
            'email.email' =>  'Email must be a valid email address.',
            'email.required' => 'Please Enter  Email Address ',
            'email.unique' => 'This email address is already in use.',
            'phone_number.required' => 'Phone number is required.',
            'phone_number.string' => 'Phone number must be a string.',
            'phone_number.regex' => 'Phone number must be a 10-digit number.',
            'phone_number.unique' => 'This phone number is already in use.',
            'password.required' => 'Password is Required',
            'password.min:5' => 'Password Contain Atleast 5 Characters Long',
            'password.max:12' => 'Password Contain Maximum 12 Characters Long',
            'confirmPassword.required' => 'Confirm Password is Required',
            'confirmPassword.same' => 'Confirm Password and Password Should be Same',
        ];
    }

}
