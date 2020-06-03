<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as AuthUser;

class User extends AuthUser
{
    //设置不允许添加字段
    protected $guarded = [];
}
