<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function index(Setting $setting){

        $settings = $setting->orderBy('sort','asc')->get();

        $data = [
            'setting' => $settings
        ];

        return view('admin.setting.index',$data);
    }

    public function save(Request $request, Setting $setting){
        //获得提交的数据
        $settings = $request->input('setting');

        //循环入库
        foreach($settings as $key=>$value){
            //如果提交数据为 null 则设为空字符串
            $value = $value === null ? '' : $value ;

            //根据 key 的值找到对应数据入库
            $setting->where('key',$key)->update(['value' => $value]);
        }

        alert('操作成功');
        return redirect()->route('admin.setting');

    }
}
