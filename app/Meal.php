<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Meal extends Model implements Transformable
{
    use TransformableTrait;

    public function menu()
    {
        return $this->hasOne(Menu::class);
    }

    public function ingredients()
    {
        return $this->hasOne(Ingredient::class);
    }
}