<?php

namespace App\Http\Controllers;

use App\Question;
use App\User;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function index()
    {
    	return view('friends.index');
    }

    public function search(Request $request)
    {
    	$word = $request->input('name');
    	$users = User::where( 'name', 'LIKE', '%' . $word . '%' )
    					->orWhere ( 'email', 'LIKE', '%' . $word . '%' )
    					->get();
    	if(count ( $users ) > 0)
    	{
    		return view ( 'friends.index' )->withDetails( $users )->withQuery( $word );
    	}else {
    		return view ( 'friends.index' )->withMessage ( 'No Details found. Try to search again !' );
    	}
    }
    public function show($username)
    {
        // Find User 
        $user = User::where('name',$username)->first();
    	return view('friends.question',[
            'user' => $user,
        ]);
    }
     public function store($userId)
    {
       
        $quest = new Question;
        $quest->user_id = auth()->id();
        $quest->owner_id =$userId;
        $quest->questions = request('question');
        $quest->is_anonymous = request('is_anonymous');
        
        $quest->save();
        return redirect('/friends');
    }
}
