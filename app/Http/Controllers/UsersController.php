<?php

namespace App\Http\Controllers;

use App\test2;
use Illuminate\Http\Request;
use app;

class UsersController extends Controller
{
    public function index(){
      /*  $tasks = App\test2::incomplete();
        return view('test2.index',compact('tasks'));*/
        return view('/web/index');
    }
    public function show($id){
        $tasks = App\test2::incomplete();
        return view('test2.show',compact('tasks'));
    }
}
