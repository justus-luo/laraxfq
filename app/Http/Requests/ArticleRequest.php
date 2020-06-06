<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//请求验证，默认false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'desn'=>'required',
            'body'=>'required',
        ];
    }
    //自定义验证错误消息
    public function messages()
    {
        return [
            'title.required'=>'标题必须填写'
        ];
    }
}
