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