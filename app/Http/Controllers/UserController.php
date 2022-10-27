<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        $user->post()->create([
            'title' => 'Primeiro post',
            'content' => 'Este é um post',
        ]);
        dd($user->post->toArray());

        return view('user', [
            'user' => $user,
        ]);
    }
}
