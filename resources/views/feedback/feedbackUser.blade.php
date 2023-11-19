@extends('layouts.2master')  

@section('head')
  Мои отзывы
@endsection

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
					<br>
            <h2  class="heading"><span style="color:#d60c00;">{{ Auth::user()-> name }}, </span>здесь собраны Ваши отзывы о нашем ресторане</h2>
					<br>
						
            @foreach ($data as $el)
						@if($el->id_user==Auth::id())
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
							          <div class="col" style="margin-left: 90px; ">
                        @if($el->statusFeedback == 3)
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
									<h5 class="card-header" style="padding-left: 1.25rem; padding-top: 1.25rem;">Дата создания отзыва: {{ $el->created_at }}</з5>
									<h5 class="card-header" style="padding-left: 1.25rem; ">Дата обновления отзыва: {{ $el->updated_at }}</h5>
									<div class="card-body" style="
																								flex: 1 1 auto;
																								min-height: 1px;
																								padding: 1.25rem;
																						}">

											<p style="font-size:14px;" class="card-text">Отзыв: <br>{{ $el->feedback }}</p>
											<a href="{{ route('feedbackView', $idFeedback = $el->id) }}" class="btn btn-default active" style="color:#401d0a; width: 200px; ">Посмотреть полностью</a>
											<a href="{{ route('feedbackEdit', $idFeedback = $el->id) }}" class="btn btn-default active" style="background-color:#ffc1072b; width: 200px; margin-left: 10px;">Редактировать отзыв</a>
											  @if($el->statusFeedback !== 1)
											<a href="{{ route('feedbackModeration', $idFeedback = $el->id) }}" class="btn btn-warning" name="feedbackModeration" style="width: 200px; margin-left: 10px;">Отправить на модерацию</a>
											@endif
											<a href="{{ route('feedbackDelete', $idFeedback = $el->id) }}" class="btn btn-default active" style="background-color:#dbb5a199; width:200px; margin-left: 10px;">Удалить отзыв</a>
										</div>
                </div>
								<br><br>
						@endif
            @endforeach
								<br>
											<a href="{{ route('feedbackCreate') }}" class="btn btn-default btn-lg btn-block">Написать отзыв</a>
								<br>
@endsection
