<?php

namespace App\Http\Controllers;

use App\Repositories\AddressRepository;

class AddressController extends Controller
{
    /** @var AddressRepository */
    private $addressRepository;

    public function __construct(AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    public function index()
    {
        return $this->addressRepository->all();
    }
}
