<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewUserValidator extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
          'name'     => 'required',
          'email'    => 'email',
          'username' => 'required|unique:users|max:255',
          'password' => 'required|min:6',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

     public function messages()
     {
       return [
        'username.required' => 'Please fill in the username for the new user',
        'name.required'     => 'Please fill in the name for the new user',
        'email.required'    => 'Please fill in the email address for the new user',
        'password.required' => 'Please fill in a password with min 6 characters for the new user',
      ];
    }
  }
