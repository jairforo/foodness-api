<?php

namespace App\Http\Controllers;

use App\Services\Contracts\UserServiceInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /** @var UserServiceInterface */
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return $this->userService->all();
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);
        $user = $this->userService->create($request->all());

        return response()->json($user, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        try {
            $user = $this->userService->find($id);
            return response()->json($user, Response::HTTP_OK);
        } catch (ModelNotFoundException $ex) {
            return response()->json([], Response::HTTP_NOT_FOUND);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $this->validateRequest($request);
            $user = $this->userService->update($request->all(), $id);

            return response()->json($user, Response::HTTP_OK);

        } catch (ModelNotFoundException $ex) {
            return response()->json([], Response::HTTP_NOT_FOUND);
        }
    }

    public function destroy($id)
    {
        try {
            $this->userService->delete($id);

            return response()->json([], Response::HTTP_NO_CONTENT);
        } catch (ModelNotFoundException $ex) {
            return response()->json([], Response::HTTP_NOT_FOUND);
        }
    }

    private function validateRequest(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ];

        $this->validate($request, $rules);
    }
}
