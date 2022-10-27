<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        $team = Team::find(1);
        $team->load('users');
        return $team;
//        $user->load('teams');
//        $user->teams()->attach(2);
//        return $user;

//        return view('user', [
//            'user' => $user,
//        ]);
    }
}
