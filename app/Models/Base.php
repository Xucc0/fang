<?php

namespace App\Models;

use App\Models\Traits\Btn;
use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    //
    use Btn;

    protected $guarded = [];

}
