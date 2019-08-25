<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $users = User::orderBy('is_admin', 'desc')->orderBy('username')->get();

        return view('user.index', compact('users'));
    }
}
