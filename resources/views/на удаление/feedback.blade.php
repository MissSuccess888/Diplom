 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
					<br>
            <h2  class="heading" style="color:#401d0a;">Отзывы о нашей работе</h2>
						<br>
            @foreach ($data as $el)
                <div class="card mt-2">
                <h5 class="card-header">E-mail: {{ $el->email }}</h5>
                <div class="card-body">
                    <h5 class="card-title">Дата отзыва: {{ $el->created_at }}</h5>
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
            @endforeach
						<br>
							 <a href="{{ route('feedbackCreate') }}" class="btn btn-default btn-lg btn-block">Написать отзыв</a>
        </div>
    </div>
	