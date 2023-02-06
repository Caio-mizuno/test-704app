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

            'phone_number'       => 'nullable',
            'password'           => 'nullable',
            'first_name'         => 'nullable',
            'last_name'          => 'nullable',
            'email'              => 'nullable',
            'gender'             => 'nullable',
            'birth_date'         => 'nullable',
            'license'            => 'nullable',
            'dt_license_expired' => 'nullable',
            'payment_style'      => 'nullable', 
        ];
    }
}
