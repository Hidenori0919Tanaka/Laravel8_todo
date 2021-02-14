<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TestinputController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //ぞんざいな照会画面を表示する
        return view('testinput.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::denies('user')) {
            //ぞんざいな更新画面を表示する
            return view('testinput.edit');
        } else {
            session()->flash('editmsg', 'あんた更新できないよ！！');
            return view('menu/menu');
        }
    }
}
