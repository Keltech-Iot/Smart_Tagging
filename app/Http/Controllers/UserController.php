<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function index(){
        $UserData = user::get();
        return view ('users.user_table', ['UserData'=>$UserData]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
