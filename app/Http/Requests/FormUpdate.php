<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormUpdate extends FormRequest
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
            
            'username' => 'required|unique:user|regex:/^\w{6,12}$/',
            
            'email'=>'email',
            'phone'=>'required|regex:/^1[345678]\d{9}$/'  
        
        ];
    }


    /**
     * 获取已定义验证规则的错误消息。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'username.required'=>"用户名不能为空",
            'username.regex'=>'用户名格式不正确',
            'username.unique'=>'用户名已存在',
            'email.email'=>'邮箱格式不正确',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号码格式不正确'
        ];
    }
}
