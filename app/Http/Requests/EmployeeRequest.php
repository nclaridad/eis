<?php

namespace App\Http\Requests;

class EmployeeRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'    => 'required|max:45',
            'last_name'     => 'required|max:45',
            'email' => 'bail|required|email|unique:users'
        ];
    }
}
