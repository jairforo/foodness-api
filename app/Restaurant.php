<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Restaurant extends Model implements Transformable
{
    use TransformableTrait;

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}