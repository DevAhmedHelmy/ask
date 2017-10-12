@extends('layouts.master')

@section('content')
	<div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-8">
                    <div class="question-form">
                       <div class="askBox-heading">
                           <h2>Question</h2>
                       </div>
                       <div class="askBox-form">
                           <form action="/questions" method="POST" accept-charset="utf-8">
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
                                <p>like and comment</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="friends">
                       <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="..." alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            ...sdgdsg
                          </div>
                          <div class="media-right">
                            <a href="#">Ask</a>
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