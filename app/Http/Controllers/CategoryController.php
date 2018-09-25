<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    /** @var CategoryRepository */
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return $this->categoryRepository->all();
    }
}
