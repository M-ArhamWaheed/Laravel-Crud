<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'fname' => 'required',
            'lname' => 'nullable',
            'email' => 'required | email | unique:App\Models\AddUser,email',
            'phone_no' => 'required | numeric',
            'city' => 'required | alpha',
            'age' => 'required | numeric | min:1 | max:60',
            'password' => 'required',
            'cpassword' => 'required | same:password',
            'address' => 'required'
        ];
    }

    public function attributes()
    {
        return ([
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'email' => 'Email',
            'phone_no' => 'Mobile No',
            'city' => 'City',
            'age' => 'Age',
            'password' => 'Password',
            'cpassword' => 'Confirm Password',
            'address' => 'Address',
        ]);
    }

    public function messages()
    {
        return ([
            'required' => ':attribute is required',
            'email.email' => 'enter a valid email address',
            'email.unique' => ':attribute Address alreay exists',
            'numeric' => ':attribute must be a number',
            'cpassword.same' => ':attribute not match',
        ]);
    }
}
