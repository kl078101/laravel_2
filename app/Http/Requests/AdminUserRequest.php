<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminUserRequest extends FormRequest
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

        $adminuser = $this->route('adminuser');

        if($adminuser){
            $rules = [
                //验证用户名是否为空和唯一性
                'username' => [
                    'required',
                    Rule::unique('admin_users', 'username')->ignore($adminuser->id),
                ],
                //验证密码是否为空和是否一致
                'password' => 'same:password2'
            ];

        }else{
            $rules = [
                //验证用户名是否为空和唯一性
                'username' => [
                    'required',
                    Rule::unique('admin_users', 'username'),
                ],
                //验证密码是否为空和是否一致
                'password' => 'required | same:password2'
            ];
        }

        return $rules;
    }

    //获取已定义验证规则的错误消息。
    public function attributes()
    {
        return [
            'password2'  => '确认密码',
        ];
    }
}
