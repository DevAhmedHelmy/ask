@extends('layouts.master')

@section('content')
  <div class="col-md-10 col-md-offset-1">
        <div class="profile-header">
            <h2>{{$user->name}}</h2>
            <p>{{$user->email}}</p>
            @if(! Auth::check())
            <div>
                <form action="/follow/{{$user->id}}" method="POST">
                {{ csrf_field() }}
                
                <button type="submit" class="btn btn-primary">
                  Follow
                </button>
              </form>
            </div>
            @endif
           
        </div>
  </div>
	<div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-8">
                    <div class="question-form">
                       <div class="askBox-heading">
                           <h4>Ask yourself</h4>
                       </div>
                       <div class="askBox-form">
                           <form action="/questions/{{$user->id}}" method="POST" accept-charset="utf-8">
                                {{csrf_field()}}
                               <div class="form-group">
                                   <textarea class="form-control" name="question" 
                                   placeholder="what,when,why....ask"></textarea>
                               </div>
                               <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="is_anonymous" value="1"> Ask anonymously
                                    </label>
                                   <button class="btn btn-warning">Ask</button>
                               </div>
                           </form>
                       </div>
                    </div>

                    @if(! empty($questions))
                        <div class="item-page">
                        @foreach($questions as $question)
                        <div class="items">
                            <div class="item-header">
                                <h6>{{$question->questions}} ?</h6>
                            </div>
                            <div class="item-properties">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="user-img">
                                            <img src="#" alt="user">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="user-details">
                                            <p>{{$question->user->name}} 
                                                <span>{{$question->created_at->diffForHumans()}}</span></p>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="item-content">
                                <p>{{$question->answers->answer}}</p>
                            </div>
                            <div class="item-footer">
                                <form action="/likes/{{$question->user->id}}/question/{{$question->id}}"          method="POST">
                                  {{ csrf_field() }}
                                  
                                  <button type="submit" class="btn btn-link">
                                    <img src="/image/if_heart_1055045.png" alt="" width="40">
                                  </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="alert alert-warning">
                        Not Found Questions
                    </div>
                    @endif
                    
                </div>
                <div class="col-md-4">
                   <div class="profile-details">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="icon">
                                        <img src="/image/if_4_330394.png" alt="">
                                    </div>
                                    <div class="count">
                                       {{$countQuestion}}
                                   </div>
                                   <div>
                                       Posts
                                   </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="icon">
                                       <img src="/image/if_heart_1055045.png" alt="">
                                    </div>
                                    <div class="count">
                                       {{$countLikes}}
                                   </div>
                                   <div>
                                       Likes
                                   </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="icon">
                                       <img src="/image/if_group_2431357.png" alt="">
                                    </div>
                                    <div class="count">
                                       55
                                   </div>
                                   <div>
                                       Followers
                                   </div>
                                </div>
                            </div>
                       
                        </div>
                        <div class="about-me">
                            <p class="about-header">About me</p>
                            <p class="edit"><i class="fa fa-edit"></i> <a href="#"> Edit Profile</a></p>
                            <div>

                            </div>
                            
                        </div>
                   </div>
                   <div class="help">
                       help
                   </div>
                   <div class="socail">
                       socail
                   </div>
                </div>
                
            </div>
        </div>

@endsection