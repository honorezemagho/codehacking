<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HopitalCreateRequest extends Request
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
            //
            'name' => 'required',
            'quartier_id' => 'required',
            'ville_id' => 'required',
            'structure_id' => 'required',
            'phone' => 'required|min:9',
        ];
    }
}
