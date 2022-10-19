<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * ページ表示
     *
     * @return Object
     */
    public function index()
    {
        return view('user.index');
    }
}
