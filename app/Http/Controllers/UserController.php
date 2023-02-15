<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->_userRepository      = new UsersRepository;
    }

    public function login()
    {
        return view('login');
    }
}
