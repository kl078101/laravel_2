<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    //软删除
    use SoftDeletes;

    protected $fillable = ['username' , 'password' , 'state'];

    //管理员状态
    const NORMAL = 1; //正常，可登陆
    const BAN = 0; //禁用，不可登陆

    public function getStateTextAttribute(){
        return config('project.admin.state')[ $this->state ];
    }

}
