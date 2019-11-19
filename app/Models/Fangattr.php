<?php

namespace App\Models;




use App\Observers\FangAttrObserve;

class Fangattr extends Base
{
    //
    protected static function boot()
    {
        parent::boot();

        Fangattr::observe(FangAttrObserve::class);
    }

}
