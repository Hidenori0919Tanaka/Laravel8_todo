<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class MenuController extends Controller
{
    //
    public function menu()
    {
        if (Auth::check()) {
            // ログイン済みだったらメニューを表示
            return view('menu/menu');
        } else {
            // ログインしていなかったらログイン画面を表示
            return view('auth/login');
        }
    }

    public function secret()
    {
        return view('secret/secret');
    }
}
