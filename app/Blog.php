<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class Blog extends Model
{
    use Resizable;
    public function category()
    {
        return $this->belongsTo('App\Bcategory');
    }
}
