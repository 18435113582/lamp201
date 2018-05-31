<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'StoreName'=>'required',
            'StoreAddress'=>'required',
            'StartHours'=>'required',
            'StorePhone'=>'required',
            'StoreUrl'=>'required',
            'area'=>'required',
            'EndHours'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'StoreName.required'=>'店铺名不能为空',
            'StoreAddress.required'=>'店铺地址不能为空',
            'StartHours.required'=>'营业时间不能为空',
            'EndHours.required'=>'营业时间不能为空',
            'StorePhone.required'=>'联系电话不能为空',
            'StoreUrl.required'=>'地图地址不能为空',
            'area.required'=>'地区名不能为空'
        ];
    }
}
