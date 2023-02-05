<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class DriverUpdateRequest extends FormRequest
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
            
            'driver_id'          => 'required',

            'phone_number'       => 'required',
            'password'           => 'required',
            'first_name'         => 'required',
            'last_name'          => 'nullable',
            'email'              => 'required',
            'gender'             => 'required',
            'birth_date'         => 'required',
            'license'            => 'required',
            'dt_license_expired' => 'required',
            'payment_style'      => 'nullable', 
        ];
    }
}
