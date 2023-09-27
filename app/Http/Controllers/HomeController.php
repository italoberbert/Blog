<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $users = User::with('posts')->paginate(50);

        //$users = cache()->remember('users1', function() {
            //return User::limit(10)->get();
        //});

        //cache()-> add('users1', 10, $users);

        return view('home', [
            'title' => 'Home',
            'users' => $users
        ]);
    }
}