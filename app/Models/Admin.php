<?php

namespace App\Models;

use App\Models\Traits\Btn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    //软删除
    use SoftDeletes,Btn;
    //软删除字段
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function roles()
    {
        return $this->belongsTo(Role::class,'role_id');
    }
}
