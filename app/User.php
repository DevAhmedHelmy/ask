<?php

namespace App;

use App\Answer;
use App\Follower;
use App\Like;
use App\Question;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function followers()
    {
        return $this->hasMany(Follower::class);
    }
}
