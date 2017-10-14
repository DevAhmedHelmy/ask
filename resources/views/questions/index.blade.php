@extends('layouts.master')

@section('content')
	<div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-8">
                    <div class="question-form">
                       <div class="askBox-heading">
                           <h2>Questions<span> ({{$questionCount}})</span></h2>
                       </div>
                    </div>
                    <div class="item-page">
                    	@foreach($questions as $question)
                        <div class="items">
                            <div class="item-header">
                                <h6>{{$question->questions}}</h6>
                            </div>
                            <div class="item-footer">
                                <p>{{$question->created_at->diffForHumans()}}
                                  <span>
                                    <a href="/answers/{{$question->id}}" class="btn btn-primary">Answer</a>
                                </span>
                                </p>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="friends">
                      <h4>Your Friends</h4>
                      <hr>
                    @if(! empty($friends))
                      @foreach($friends as $userfriends)
                       <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="..." alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">{{$userfriends->user->name}}</h4>
                              {{$userfriends->user->email}}
                          </div>
                          <div class="media-right">
                            <a href="/{{$userfriends->user->name}}/question" class="btn btn-primary">Ask</a>
                          </div>
                        </div>
                        <hr>
                        @endforeach
                        @endif
                   </div>
                   <div class="help">
                       help
                   </div>
                   <div class="socail">
                       <ul class="links">
                          <li><a href="#">ask</a></li>
                          <li><a href="#">ask</a></li>
                          <li><a href="#">ask</a></li>
                          <li><a href="#">ask</a></li>
                          <li><a href="#">ask</a></li>
                          <li><a href="#">ask</a></li>
                          <li><a href="#">ask</a></li>
                       </ul>
                       <ul class="socail-icon">
                          <li><a href="#"><img src="/image/ask.png" alt=""></a></li>
                          <li><a href="#"><img src="/image/facebook.png" alt=""></a></li>
                          <li><a href="#"><img src="/image/inst.png" alt=""></a></li>
                          <li><a href="#"><img src="/image/twitter.png" alt=""></a></li>
                           
                          
                       </ul>
                       <hr>
                        <a class="lang" href="#"><i class="fa fa-language" aria-hidden="true"></i> 
                              English</a>
                        <span class="copyright">© Ask.fm 2017</span>
                   </div>
                </div>
                
            </div>
        </div>

@endsection