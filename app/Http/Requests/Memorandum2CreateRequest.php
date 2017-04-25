<?php

namespace sisRRHH\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Memorandum2CreateRequest extends FormRequest
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
            "numero_tomo"=>"integer|unique:memorandum,numero_tomo",
        ];
    }
}
