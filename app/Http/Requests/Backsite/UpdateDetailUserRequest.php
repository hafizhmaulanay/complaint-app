<?php

namespace App\Http\Requests\Backsite;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDetailUserRequest extends FormRequest
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
            'photo' => [
                'nullable', 'mimes:jpeg,svg,png', 'max:5000',
            ],
            'number_id' => [
                'nullable', 'string', 'min:16',
            ],
            'gender' => [
                'sometimes', 'required', 'integer', 'in:1,2',
            ],
            'date_of_birth' => [
                'sometimes', 'required', 'date_format:d/m/Y',
            ],
            'mobile_phone' => [
                'nullable', 'string', 'max:255',
            ],
            'address' => [
                'nullable', 'string', 'max:5000',
            ],
            'information' => [
                'nullable', 'string', 'max:5000',
            ],
            'status' => [
                'nullable', 'integer',
            ],
        ];
    }
}
