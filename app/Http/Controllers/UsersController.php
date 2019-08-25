<?php

namespace App\Http\Controllers;

use App\ParentModel;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function associate(User $user)
    {
        $parents = ParentModel::all();

        return view(
            'user.associate',
            [
                'parents' => $parents,
                'user' => $user->load('parents'),
            ]
        );
    }
}
