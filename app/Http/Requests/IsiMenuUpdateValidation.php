<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IsiMenuUpdateValidation extends FormRequest
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
            'jenis_st' => 'required',
            'informasi_st' => 'required'
        ];
    }
}
