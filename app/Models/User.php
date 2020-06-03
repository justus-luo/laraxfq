<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //设置不允许添加字段
    protected $guarded = [];
}
