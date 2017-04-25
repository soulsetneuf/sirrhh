<?php

namespace sisRRHH\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemorandumCreateRequest extends FormRequest
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
            "path"=>"required|mimes:jpeg,bmp,png'",
            "numero_tomo"=>"integer",
            "numero_memorandum"=>"integer",
            'fecha_asignacion' => 'required|date|date_format:Y-m-d|before:fecha_designacion',
        ];
    }
}
