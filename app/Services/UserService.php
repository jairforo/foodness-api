<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryContract;
use App\Services\Contracts\UserServiceInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserService extends BaseService implements UserServiceInterface
{
    public function __construct(UserRepositoryContract $repository)
    {
        parent::__construct($repository);
    }

    public function create(array $attributes): Model
    {
        $attributes['password'] = Hash::make($attributes['password']);
        return $this->repository->create($attributes);
    }
}