<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($id, $name)
    {
        $user = [
            'id' => $id,
            'name' => $name
        ];
        return view('user.profile', ['user' => $user]);
    }
}
