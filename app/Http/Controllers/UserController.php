<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return inertia('Users/Index', [
            'users'=>$users
        ]);
    }

    public function create(){
        return inertia('Users/Create');
    }

    public function edit(User $user){
        return inertia('Users/Edit');
    }

    public function destroy(User $user) {
        $user->delete();

        return redirect('/users')->with('message', 'User successfully deleted');;
    }

}
