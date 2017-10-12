<?php

namespace App;

use App\Answer;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers()
    {
    	return $this->hasOne(Answer::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
