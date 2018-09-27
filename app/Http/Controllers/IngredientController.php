<?php

namespace App\Http\Controllers;

use App\Repositories\IngredientRepository;

class IngredientController extends Controller
{
    /** @var IngredientRepository */
    private $ingredientRepository;

    public function __construct(IngredientRepository $ingredientRepository)
    {
        $this->ingredientRepository = $ingredientRepository;
    }

    public function index()
    {
        return $this->ingredientRepository->all();
    }
}
