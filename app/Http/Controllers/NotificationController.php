<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
    	$questions = Question::where('is_seen','=',0)->get();
    	Question::whereIn('id',$questions->pluck('id')->toArray())->update(['is_seen'=> 1]);
    	return view('notifications.index',compact('questions'));
    }
}
