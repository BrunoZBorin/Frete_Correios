<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersFormRequest extends FormRequest
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
            'CEP_Origem'=>'min:8|max:8',
            'CEP_Destino'=>'min:8|max:8'
        ];
    }
    public function messages()
    {
        return[
            
            'min' => 'O cep deve possuir exatamente 8 dígitos',
            'max' => 'O cep deve possuir exatamente 8 dígitos',
        ];
    }
}
