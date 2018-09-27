<?php

namespace App\Repositories;

use App\Repositories\Contracts\MealRepositoryContract;
use App\Meal;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class MealRepository extends BaseRepository implements MealRepositoryContract
{
    protected $fieldSearchable = [
        'name' => 'like'
    ];

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function model()
    {
        return Meal::class;
    }


}
