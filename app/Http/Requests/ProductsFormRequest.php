<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductsFormRequest extends FormRequest
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
            
            'name'=>'required|min:3',
            'weight'=>'required|numeric|max:30',
            'height'=>'required|numeric|between:2,105',
            'length'=>'required|numeric|between:16,105',
            'width'=>'required|numeric|between:11,105',
        ];
    }
    public function messages()
    {
        return[
            'required' => 'É necessário preencher todos os campos',
            'min' => 'O campo nome precisa de ao menos 3 caracteres',
            'max'=>'O peso deve ser menor que 30 kgs',
            'height.between'=>'A altura deve ser menor que 105 ou maior que 2 cm',
            'length.between'=>'O comprimento deve ser menor que 105 ou maior que 16 cm',
            'width.between'=>'A largura deve ser menor que 105 ou maior que 11 cm'
        ];
    }
}
