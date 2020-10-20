<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Test2sController extends Controller
{
    public function index()
    {
        $tasks = App\test2s::all();
        return view('posts.index',compact('tasks'));

    }

    public function show($id)
    {
        $task = App\test2s::find($id);
        return view('posts.show',compact('task'));
    }
}
