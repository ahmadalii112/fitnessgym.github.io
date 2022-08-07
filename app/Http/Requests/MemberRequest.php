<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MemberRequest extends FormRequest
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
            'firstname' => ['required', 'regex:/^[a-zA-Z ]+$/'],
            'middlename' => ['nullable', 'regex:/^[a-zA-Z ]+$/'],
            'lastname' => ['required', 'regex:/^[a-zA-Z ]+$/'],
            'date_of_birth' => 'required|before:' . now(),
            'cnic' => ['required', 'min:13'],
            'address' => ['nullable', 'max:300'],
            'phone' => ['required', 'max:18'],
            'mobile' => ['sometimes', 'nullable', 'max:18'],
            'gender' => ['required', 'not_in:0'],
            'weight' => ['required'],
            'email' => 'required|email|unique:users,email,' . optional($this->member)->id
        ];
    }
}
