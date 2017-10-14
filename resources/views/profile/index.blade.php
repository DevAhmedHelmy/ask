@extends('layouts.master')

@section('content')
  <div class="col-md-10 col-md-offset-1">
        <div class="profile-header">
            <h2>{{$user->name}}</h2>
            <p>{{$user->email}}</p>
  
            <div>
                <form action="/follow/{{$user->id}}" method="POST">
                {{ csrf_field() }}
                
                <button type="submit" class="btn btn-primary">
                  Follow
                </button>
              </form>
            </div>
             
           
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>{{$question->questions}} </h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                          <div class="col-md-2">
                                              <div class="user-img">
                                                <img src="#" alt="user Image">
                                              </div>
                                          </div>
                                          <div class="col-md-10">
                                            <div class="user-details">
                                              <p>{{$question->user->name}}</p>
                                            </div>
                                          </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="item-properties">
                                {{$question->created_at->diffForHumans()}}
                            </div>
                            <div class="item-content">
                                <h4>{{$question->answers->answer}}</h4>
                            </div>
                            <div class="item-footer">
                              <div class="form-like">
                                 <form action="/likes/{{$question->user->id}}/question/{{$question->id}}"          method="POST">
                                    {{ csrf_field() }}
                                    
                                    <button type="submit" class="btn btn-link">
                                      <img src="/image/if_heart_1055045.png" alt="" width="30">
                                    </button>
                                </form>
                                <ul class="list-unstyled"> 
                                  <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                  <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                </ul>
                              </div>
                                
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
                                       {{$countFollowers}}
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