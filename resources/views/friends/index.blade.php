@extends('layouts.master')

@section('content')
  
	<div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-8">
                    <div class="question-form search">
                  
                       <div class="askBox-form">
                           <form action="/search" method="POST" accept-charset="utf-8">
                                {{csrf_field()}}
                               <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="name" id="name" 
                                    placeholder="Search people by keywords" required>
                               </div>
                               <div class="form-group">
                                    
                                   <button class="btn btn-warning">Search</button>
                               </div>
                           </form>
                       </div>
                    </div>

                      @if(isset($details))
                        <div class="item-page">
                          <div class="search-header">
                            <h2>Friends</h2>
                            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                          </div>
                        @foreach($details as $user)

                        <div class="items">
                            <div class="item-header">
                                <div class="media media-search">
                                  <div class="media-left">
                                    <a href="#">
                                      <img class="media-object" src="..." alt="...">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <h4 class="media-heading"><a href="#"><span>{{$user->name}}</span></a>
                                    </h4>
                                  </div>
                                  <div class="media-right">
                                    <a href="/{{$user->name}}/question" class="btn btn-primary">Ask</a>
                                    </a>
                                  </div>
                                </div>
                            </div>
                            </div>
                        @endforeach
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
                                       55
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