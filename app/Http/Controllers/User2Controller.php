<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    public function index()
    {
    }

    public function show(Request $request, User $user)
    {
        return $user;
    }
}
