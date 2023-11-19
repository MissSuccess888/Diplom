<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <div class="card mt-2">
							<br>
                <h4 class="card-header">{{ $data->email }}</h4>
                <p style="font-size: 18px;" class="card-text">{{ $data->feedback }}</p>
            </div>

            <div class="">
                @if($data->id_user == Auth::id())
								<a href="{{ route('feedbackEdit', $idFeedback = $data->id) }}" class="btn btn-default active" style="background-color:#ffc1072b; width: 200px;">Редактировать отзыв</a>
								<a href="{{ route('feedbackDelete', $idFeedback = $data->id) }}" class="btn btn-default active" style="background-color:#dbb5a199; width:200px; margin-left: 10px;">Удалить отзыв</a>
								@endif
								<a href="{{ route('feedbackCreate') }}" class="btn btn-default active" style="color:#401d0a; width: 200px;">Оставить отзыв</a>
          	</div>
						<br>
							 <a href="{{ route('feedback') }}" class="btn btn-default btn-lg btn-block">Все отзывы</a>
        </div>
    </div>