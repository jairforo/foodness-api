<?php

namespace App\Http\Controllers;

use App\Repositories\RestaurantRepository;

class RestaurantController extends Controller
{
    /** @var RestaurantRepository */
    private $restaurantRepository;

    public function __construct(RestaurantRepository $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }

    public function index()
    {
        return $this->restaurantRepository->all();
    }
}
