<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
