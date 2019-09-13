<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JordanMiguel\LaravelPopular\Traits\Visitable;
use TCG\Voyager\Traits\Resizable;


class Product extends Model
{
    use Visitable;
    use Resizable;

    public function category()
    {
        return $this->belongsTo('App\Pcategory');
    }
}
