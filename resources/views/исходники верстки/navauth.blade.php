@if (Route::has('login'))
			<li role="presentation" class="dropdown">
					@auth
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								ВЫ АВТОРИЗОВАНЫ <span class="caret"></span>
							</a>
								@else
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								АУТЕНТИФИКАЦИЯ <span class="caret"></span>
							</a>
					@endauth

							<ul class="dropdown-menu">
							@if($admin->id == Auth::id())
							<li><a href="{{ url('/admin') }}">Личный кабинет {{ Auth::user()->name }}</a></li>
							<li><a href="{{ url('/dashboard') }}">Выйти</a></li>
							@else
							@auth
									<li><a href="{{ url('/dashboard') }}">Личный кабинет {{ Auth::user()->name }}</a></li>
									<li><a href="{{ url('/dashboard') }}">Выйти</a></li>

											@else		
													<li><a href="{{ route('login') }}">Войти</a></li>
													@if (Route::has('register'))
													<li><a href="{{ route('register') }}">Регистрация</a></li>
													@endif
							@endauth
							@endif
						</ul>
		</li>
@endif
				