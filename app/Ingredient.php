<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Ingredient extends Model implements Transformable
{
    use TransformableTrait;

    public function meal()
    {
        return $this->hasOne(Meal::class);
    }
}