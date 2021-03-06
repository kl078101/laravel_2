<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    //登陆
    Route::get('login', 'LoginController@index')->name('admin.login');
    Route::post('login', 'LoginController@check')->name('admin.login');

    //退出登陆
    Route::get('logout', 'LoginController@logout')->name('admin.logout');

    //受保护的后台路由
    Route::middleware(['adminlogincheck'])->group(function(){
        //后台首页
        Route::get('index', 'IndexController@index')->name('admin.index');

        //管理员管理
        Route::prefix('adminuser')->group(function () {
            Route::get('/', 'AdminUserController@index')->name('admin.adminuser');
            Route::get('add/{adminuser?}', 'AdminUserController@add')->name('admin.adminuser.add');
            Route::post('add/{adminuser?}', 'AdminUserController@save')->name('admin.adminuser.add');
            Route::get('remove/{adminuser}', 'AdminUserController@remove')->name('admin.adminuser.remove');
            Route::get('state/{adminuser}', 'AdminUserController@state')->name('admin.adminuser.state');
        });

        //系统设置
        Route::prefix('setting')->group(function () {
            Route::get('/', 'SettingController@index')->name('admin.setting');
            Route::post('/', 'SettingController@save')->name('admin.setting');
        });
    });

});


Route::get('/gbook/index', 'MsgController@index')->name('index');
Route::post('/gbook/save', 'MsgController@save')->name('save');
