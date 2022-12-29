<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrosRequest extends FormRequest
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
            'finalidad' => 'required|string|max:255',
            'factura' => 'required|string|max:255',
            'endoso_a_favor_cooperativa' => 'required|string|max:255',
            'garantia_cubre_credito' => 'required|string|max:255',
            'poliza' => 'required|string|max:255',
            'seguro' => 'required|string|max:255',
            'observaciones' => 'required|string|max:255',

        ];
    }
}
