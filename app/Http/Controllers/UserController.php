<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
        // $user = new User();
        // $user->name = 'lael ramos';
        // $user->email = 'lael@lael.com';
        // $user->password = Hash::make(value:'123');
        // $user->save();
        echo "<h1>listagem de usuarios</h1>";
    }
}
