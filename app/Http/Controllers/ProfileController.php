<?php

namespace App\Http\Controllers;

use App\Like;
use App\Question;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {

    	$user = User::findOrFail($id);
    	$questions = Question::with('answers')->whereHas('answers')->where('user_id','='.$id)->get();
 		$countQuestion = Question::where('user_id','=',$id)->count();
 		$countLikes = Like::where('user_id','=',$id)->count();

    	return view('profile.index',compact('user','countQuestion','countLikes'));
    }
}
