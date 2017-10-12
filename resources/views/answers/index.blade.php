@extends('layouts.master')
@section('content')

<div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-8">
                	@if(isset($question))
                    <div class="question-form">
                       <div class="askBox-heading">

                           <h4>{{$question->questions}}</h4>
                       </div>
                       <div class="askBox-form">
                           <form action="/answers/{{$question->user->id}}/question/{{$question->id}}" 
                              method="POST" 
                                accept-charset="utf-8">
                                {{csrf_field()}}
                                
                               <div class="form-group">
                                   <textarea class="form-control" name="answer" rows="5" 
                                   placeholder="what is your answers?"></textarea>
                               </div>
                               <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="is_anonymous" value="1">Ask anonymously
                                    </label>
                                   <button class="btn btn-warning">Answer</button>
                               </div>
                           </form>
                       </div>
                    </div>
                    @endif
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