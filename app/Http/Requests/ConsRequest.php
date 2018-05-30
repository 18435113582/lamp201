<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsRequest extends FormRequest
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
            'rec' => 'required|regex:/^\w{1,12}$/',
            'tel'=>'required|regex:/^1[345678]\d{9}$/',
            'addr'=>'required'
            'fapiao'=>'regex:/^\w{2,12}$/'
        ];
    }

    public function messages()
    {
        return [
            'rec.required'=>"收货人不能为空",
            'rec.regex'=>'收货人格式不正确',
            'tel.required'=>'收货人电话不能为空',
            'tel.regex'=>'收货人电话格式不正确',
            'addr.required'=>'收货人地址不能为空',
            'fapiao.regex'=>'发票抬头格式不正确'
        ];
    }
}
