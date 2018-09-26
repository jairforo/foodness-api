<?php

namespace App\Http\Controllers;

use App\Repositories\MenuRepository;

class MenuController extends Controller
{
    /** @var MenuRepository */
    private $menuRepository;

    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function index()
    {
        return $this->menuRepository->all();
    }
}
