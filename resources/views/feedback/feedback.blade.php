@extends('layouts.2master')  

@section('head')
    ОТЗЫВЫ
@endsection

@section('content')
 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
					<br>
					@if(Auth::id() === $admin->id)
					<h2  class="heading" style="color:#401d0a;">Все отзывы для админа</h2><br>
					@else
            <h2  class="heading" style="color:#401d0a;">Отзывы о нашей работе</h2><br>
					@endif
					
            @foreach ($data as $el)
								@if($admin->id ==Auth::id() && $el->statusFeedback >= 1)
                <div class="card mt-2" style="
																								margin-top: 0.5rem!important;
																								position: relative;
																								display: -ms-flexbox;
																								display: flex;
																								-ms-flex-direction: column;
																								flex-direction: column;
																								min-width: 0;
																								word-wrap: break-word;
																								background-color: #fff;
																								background-clip: border-box;
																								border: 1px solid rgba(0,0,0,.125);
																								border-radius: 0.25rem;
																																					}">
                  <div class="col-6" style="margin-left: 1.25rem; padding-top: 1.25rem;">E-mail: {{ $el->email }}
										<div class="row" style="margin-left: 1.25rem; width:50%; display:inline-block; color:red;  position:relative; right: -800px;;">
							          <div class="col" style="margin-left: 90px;">
                        @if($el->statusFeedback ==3)
                         <span style="color:black;"> Черновик</span>
                        @elseif ($el->statusFeedback == 1)
                        <span style="color:blue;">На проверке</span>
                        @elseif ($el->statusFeedback == 2)
                         <span style="color:green;">Опубликован</span>
                        @else
                        Сохранен
                        @endif
                   	 		</div>
               		 </div>
									</div>
                  <div class="card-body" style="
																								flex: 1 1 auto;
																								min-height: 1px;
																								padding: 1.25rem;
																						}">
                    <h5 class="card-title" style="
																								padding: 1.25rem 0.75rem 1.25rem 0;
																								margin-bottom: 0;
																								background-color: rgba(0,0,0,.03);
																								border-bottom: 1px solid rgba(0,0,0,.125);}">
																Дата отзыва: {{ $el->created_at }}</h5>
                    <h5 class="card-title">Последнее обновление: {{ $el->updated_at }}</h5>
                    <p class="card-text" style="font-size:14px;">{{ $el->feedback }} </p>
										<div>
												<a href="{{ route('feedbackView', $idFeedback = $el->id) }}" class="btn btn-default active" style="color:#401d0a; width: 200px; ">Посмотреть полностью</a>
												@if($el->id_user == Auth::id())
												<a href="{{ route('feedbackEdit', $idFeedback = $el->id) }}" class="btn btn-default active" style="background-color:#ffc1072b; width: 200px; margin-left: 10px;">Редактировать отзыв</a>
												@endif
												@if($el->id_user == Auth::id())
												<a href="{{ route('feedbackDelete', $idFeedback = $el->id) }}" class="btn btn-default active" style="background-color:#dbb5a199; width:200px; margin-left: 10px;">Удалить отзыв</a>
												@endif
										</div>
                </div>
                </div>
								<br><br>
            	

							@elseif($el->statusFeedback == 2)
                <div class="card mt-2" style="
																								margin-top: 0.5rem!important;
																								position: relative;
																								display: -ms-flexbox;
																								display: flex;
																								-ms-flex-direction: column;
																								flex-direction: column;
																								min-width: 0;
																								word-wrap: break-word;
																								background-color: #fff;
																								background-clip: border-box;
																								border: 1px solid rgba(0,0,0,.125);
																								border-radius: 0.25rem;
																																					}">
                  <div class="col-6" style="margin-left: 1.25rem; padding-top: 1.25rem;">E-mail: {{ $el->email }}
										<div class="row" style="margin-left: 1.25rem; width:50%; display:inline-block; color:red;  position:relative; right: -800px;;">
							          <div class="col" style="margin-left: 90px;">
                        @if($el->statusFeedback ==3)
                         <span style="color:black;"> Черновик</span>
                        @elseif ($el->statusFeedback == 1)
                        <span style="color:blue;">На проверке</span>
                        @elseif ($el->statusFeedback == 2)
                         <span style="color:green;">Опубликован</span>
                        @else
                        Сохранен
                        @endif
                   	 		</div>
               		 </div>
									</div>
                  <div class="card-body" style="
																								flex: 1 1 auto;
																								min-height: 1px;
																								padding: 1.25rem;
																						}">
                    <h5 class="card-title" style="
																								padding: 1.25rem 0.75rem 1.25rem 0;
																								margin-bottom: 0;
																								background-color: rgba(0,0,0,.03);
																								border-bottom: 1px solid rgba(0,0,0,.125);}">
																Дата отзыва: {{ $el->created_at }}</h5>
                    <h5 class="card-title">Последнее обновление: {{ $el->updated_at }}</h5>
                    <p class="card-text" style="font-size:14px;">{{ $el->feedback }} </p>
										<div>
												<a href="{{ route('feedbackView', $idFeedback = $el->id) }}" class="btn btn-default active" style="color:#401d0a; width: 200px; ">Посмотреть полностью</a>
												@if($el->id_user == Auth::id())
												<a href="{{ route('feedbackEdit', $idFeedback = $el->id) }}" class="btn btn-default active" style="background-color:#ffc1072b; width: 200px; margin-left: 10px;">Редактировать отзыв</a>
												@endif
												@if($el->id_user == Auth::id())
												<a href="{{ route('feedbackDelete', $idFeedback = $el->id) }}" class="btn btn-default active" style="background-color:#dbb5a199; width:200px; margin-left: 10px;">Удалить отзыв</a>
												@endif
										</div>
                </div>
                </div><br><br>
								
            	@endif
@endforeach
@if($admin->id !==Auth::id())
			<br><a href="{{ route('feedbackCreate') }}" class="btn btn-default btn-lg btn-block">Написать отзыв</a>
@endif
			</div>
</div>
@endsection