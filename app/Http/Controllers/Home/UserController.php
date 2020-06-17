<?php

/**
 *
 */
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\UserService;

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(UserService $userService)
    {
        return $userService->store();
    }

    public function test()
    {

    }

}
