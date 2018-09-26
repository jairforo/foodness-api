<?php

namespace App\Repositories;

use App\Repositories\Contracts\UserRepositoryContract;
use App\User;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryContract
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
        return User::class;
    }
}
