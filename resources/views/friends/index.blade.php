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
                                    <h4 class="media-heading"><a href="/profile/{{$user->id}}">
                                      <span>{{$user->name}}</span></a>
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