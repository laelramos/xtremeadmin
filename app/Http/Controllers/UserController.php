<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.ListUsers', compact('users'));
    }


    public function create()
    {
        return view('users.NewUser');
    }
}
