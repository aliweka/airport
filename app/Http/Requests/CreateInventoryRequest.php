<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateInventoryRequest extends Request
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
            'photo' => 'required|image',
            'snr' => 'required|numeric',
            'pnr' => 'required|numeric',
            'status' => 'required',
            'vendor' => 'required'
        ];
    }
}
