<?php

//弹出信息提示框
function alert($message, $type = 'success')
{
    session()->flash($type, $message);
}

//系统配置
function setting($key){

    $settings = app('App\Models\Setting')->setting_keys($key);

    return $settings[$key];
}
