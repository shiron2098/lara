<?php

namespace App\Http\Controllers;

use App\M;
use App\Model\t2s\Users;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function TableUsers()
    {
        $users = Users::paginate(4);
        return view('pagination',compact('users'));
    }
}
