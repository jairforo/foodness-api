<?php

namespace App\Repositories;

use App\Repositories\Contracts\MenuRepositoryContract;
use App\Menu;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class MenuRepository extends BaseRepository implements MenuRepositoryContract
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
        return Menu::class;
    }
}
