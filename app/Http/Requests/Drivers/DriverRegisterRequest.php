<?php

namespace App\Http\Requests\Drivers;

use Illuminate\Foundation\Http\FormRequest;

class DriverRegisterRequest extends FormRequest
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

            "plate"      => 'required',
            "year"       => 'nullable',
            "model"      => 'nullable',
            "brand"      => 'nullable',
            "color"      => 'nullable',
            "renavam"    => 'nullable',
            "ride_model" => 'required',
        ];
    }
}
