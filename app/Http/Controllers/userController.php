<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
   
    public function index()
    {
         $user = User::find($id);
        return view('favorite', compact('user'));

    }

}
