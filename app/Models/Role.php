<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Base
{
    //


    public function nodes()
    {
        return $this->belongsToMany(Node::class,'role_nodes','role_id','node_id');
    }
}
