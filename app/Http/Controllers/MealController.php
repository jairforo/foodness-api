<?php

namespace App\Http\Controllers;

use App\Repositories\MealRepository;

class MealController extends Controller
{
    /** @var MealRepository */
    private $mealRepository;

    public function __construct(MealRepository $mealRepository)
    {
        $this->mealRepository = $mealRepository;
    }

    public function index()
    {
        return $this->mealRepository->all();
    }
}
