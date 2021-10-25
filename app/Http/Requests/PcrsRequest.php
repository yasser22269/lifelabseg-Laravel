<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PcrsRequest extends FormRequest
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
            'name' => 'required',
            'gender' => 'required|in:male,female',
            'FileNumber' => 'required',
            'PassportNumber' => 'required',
            'DateOfBirth' => 'required|date',
            'RequestDate' => 'required|date',
            'ResultDate' => 'required|date',
        ];
    }
    

}
