<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    //
    public function index() {
        $date = date("Y/m/d");
        return view('todos.index', compact('date'));
    }
}
