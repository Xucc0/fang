<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Base
{
    //添加属性
    protected $appends = ['actionBtn'];

    public function cates()
    {
        return $this->belongsTo(Cate::class,'cid');
    }




    public function getActionBtnAttribute()
    {
        return $this->editBtn('admin.article.edit').'  '.$this->delBtn('admin.article.destroy');
    }
}
