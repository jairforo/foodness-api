<?php

namespace App\Repositories;

use App\Repositories\Contracts\RestaurantRepositoryContract;
use App\Restaurant;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class RestaurantRepository extends BaseRepository implements RestaurantRepositoryContract
{
    protected $fieldSearchable = [
        'name' => 'like',
    ];

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function model()
    {
        return Restaurant::class;
    }

    public function restaurant()
    {
        return $this->hasOne(Restaurant::class);
    }
}
