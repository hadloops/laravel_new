<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function web()
    {
        return view('welcome');
    }

    public function info()
    {
        return view();
    }
}
