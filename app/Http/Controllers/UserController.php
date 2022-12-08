<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function recipe()
    {
        return view('Users.recipe');
    }
    public function contact()
    {
        return view('Users.contact');
    }
    public function Blog()
    {
        return view('Users.Blog');
    }
}
