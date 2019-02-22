<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\category;
use App\Tag;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=Auth::user();
        $name=$user->name;
        return view('home')->with('username',$name)
                           ->with('totalpost',Post::all()->count())
                           ->with('totalcat',category::all()->count())
                           ->with('totaltag',Tag::all()->count())
                           ->with('totaluser',User::all()->count())
                           ->with('trashed',Post::onlyTrashed()->get()->count());
    }
}
