<?php

namespace App\Repositories;

use App\Repositories\Contracts\IngredientRepositoryContract;
use App\Ingredient;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class IngredientRepository extends BaseRepository implements IngredientRepositoryContract
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
        return Ingredient::class;
    }


}
