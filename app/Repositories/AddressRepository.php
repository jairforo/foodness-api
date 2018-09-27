<?php

namespace App\Repositories;

use App\Repositories\Contracts\AddressRepositoryContract;
use App\Address;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class AddressRepository extends BaseRepository implements AddressRepositoryContract
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
        return Address::class;
    }


}
