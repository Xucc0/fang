<?php

namespace App\Observers;

use App\Models\Fangattr;

class FangAttrObserve
{
    /**
     * Handle the fangattr "created" event.
     *
     * @param  \App\Models\Fangattr  $fangattr
     * @return void
     */
    public function creating(Fangattr $fangattr)
    {
        //

        $fieldname = request()->get('field_name');

        $fangattr->field_name = $fieldname == null ? '' :$fieldname;
    }

}
