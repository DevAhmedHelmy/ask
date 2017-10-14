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
															<div class="form-like">
																<form action="/likes/{{$question->user->id}}/question/{{$question->id}}" 					method="POST">
																	{{ csrf_field() }}
																	
																	<button type="submit" class="btn btn-link">
																		<img src="/image/if_heart_1055045.png" alt="" width="30">
																	</button>
																</form>
																<ul class="list-unstyled"> 
																	<li>
																		<a title="Share now" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
																	</li>
																	<li><a title="Re-ask the question" href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
																	<li><a title="Report post" href="#"><i class="fa fa-flag" aria-hidden="true"></i></a></li>
																</ul>
															</div>
															

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