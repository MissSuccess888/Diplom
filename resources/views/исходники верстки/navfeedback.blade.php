<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      ОТЗЫВЫ <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
     				<li><a href="{{ route('feedback') }}">Все отзывы</a></li>
			@auth
			@if(Auth::id() == $admin->id)
						<li><a href="{{ route('feedbackUser') }}">На проверке</a></li>
						<li><a href="{{ route('feedbackUser') }}">Опубликованные отзывы</a></li>
			@endif
				@if(Auth::id() !== $admin->id)
			     	<li><a href="{{ route('feedbackUser') }}">Мои отзывы</a></li>
				@endif
			@endauth
@if(Auth::id() !== $admin->id)
					<li><a href="{{ route('feedbackCreate') }}">Оставить отзыв</a></li>
			@endif
		 </ul>
  </li>