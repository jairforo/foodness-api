<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Address extends Model implements Transformable
{
    use TransformableTrait;

    public function restaurant()
    {
        return $this->hasOne(Restaurant::class);
    }
}