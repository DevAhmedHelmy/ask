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