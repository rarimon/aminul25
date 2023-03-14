<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Auth;

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

        $user_list = User::OrderBy('id', 'desc')->Paginate(2);
        $logged_user = Auth::user()->name;
        $total_user = User::count();



        return view('home', [
            'user_list' => $user_list,
            'logged_user' =>    $logged_user,
            'total_user' =>    $total_user,
        ]);
    }
}
