<?php

namespace App\Services;

use App\Services\Contracts\BaseServiceInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Prettus\Repository\Contracts\RepositoryInterface;

abstract class BaseService implements BaseServiceInterface
{
    /** @var RepositoryInterface */
    protected $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function all(array $columns = ['*']): Collection
    {
        return $this->repository->all($columns);
    }

    public function find(int $id, array $columns = ['*']): Model
    {
        return $this->repository->find($id, $columns);
    }

    public function create(array $attributes): Model
    {
        return $this->repository->create($attributes);
    }

    public function update(array $attributes, int $id): Model
    {
        return $this->repository->update($attributes, $id);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }
}