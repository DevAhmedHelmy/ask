@extends('layouts.master')

@section('content')
 
	<div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-8">
                    <div class="question-form">
                       <div class="askBox-heading">
                           <h4>Ask {{ $user->name }} a question</h4>
                       </div>
                       <div class="askBox-form">
                           <form action="/{{ $user->id }}/ask" method="POST" accept-charset="utf-8">
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