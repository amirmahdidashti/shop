<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
class UserController extends Controller
{
    public function list() {
        $Users = User::get();
        return view('admin.users.list',compact('Users'));
    }
}
