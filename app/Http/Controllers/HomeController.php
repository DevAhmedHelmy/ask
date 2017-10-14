<?php

namespace App\Http\Controllers;

use App\Follower;
use App\Question;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $questions = Question::with('answers')->whereHas('answers')->get();
        $friends = Follower::where('user_id','=',auth()->user()->id)->get();
        return view('feed.index',compact('questions','friends'));
    }
    
}
