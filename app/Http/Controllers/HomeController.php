<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();

        $user = User::with('teems.users.status.statusType')->find($user->id);

        return $user;

        if(sizeof($user->teems) == 0){
            return $user;
        }

        return view('home.home');
    }
}
