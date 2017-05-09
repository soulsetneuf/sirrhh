<?php

namespace sisRRHH\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemorandumUpdateRequest extends FormRequest
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
            "path"=>"required|mimes:jpeg,bmp,png",
            "numero_memorandum"=>"integer",
        ];
    }
}
