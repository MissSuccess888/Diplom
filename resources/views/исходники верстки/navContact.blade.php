<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
      КОНТАКТЫ <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
     				<li><a href="#contact1" class="smoothScroll">Наши контакты</a></li>
						@auth
							@if($admin->id !== Auth::id())
		
						<li><a href="{{ route('bookingUser') }}">Мои брони </a></li>
		
			@endif
				@endauth
     				<li><a href="{{ route('booking') }}">Бронирование </a></li>
		   </ul>
  </li>	