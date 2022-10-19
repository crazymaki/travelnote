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

    /**
     * ログイン認証機能
     *
     * @return Object
     */
    public function login()
    {
        return view('user.index');
    }

    /**
     * 新規ユーザー登録
     *
     * @return void
     */
    public function registration()
    {
        # code...
    }
}
