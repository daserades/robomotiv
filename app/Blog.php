<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JordanMiguel\LaravelPopular\Traits\Visitable;
use TCG\Voyager\Traits\Resizable;


class Blog extends Model
{
    use Resizable;
    use Visitable;

    public function category()
    {
        return $this->belongsTo('App\Bcategory');
    }
}
