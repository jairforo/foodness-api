<?php

namespace App\Repositories;

use App\Category;
use App\Repositories\Contracts\CategoryRepositoryContract;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryContract
{
    protected $fieldSearchable = [
        'name' => 'like'
    ];

    public function model()
    {
        return Category::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
