<!-- navigation section -->
	<section class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon icon-bar"></span>
							<span class="icon icon-bar"></span>
							<span class="icon icon-bar"></span>
						</button>
							@if (Auth::id())
								<img src="/images/fav1.png" class="block h-9 ml-1" alt="logo" width="45px"/>
								<a href="{{ route('auth')}}" class="navbar-brand" style="color:#d60c00;">РЕСТОРАН ВКУСНОЙ ЕДЫ</a>
								@elseif($admin->id == Auth::id())
								<a href="{{ route('admin')}}" class="navbar-brand" style="color:#d60c00;">РЕСТОРАН ВКУСНОЙ ЕДЫ</a>
										@else
								<img src="/images/fav1.png" class="block h-9" alt="logo" width="45px"/>
								<a href="{{ route('home')}}" class="navbar-brand" style="color:#d60c00;">РЕСТОРАН ВКУСНОЙ ЕДЫ</a>
							@endif
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
		
								<li><a href="#home" class="smoothScroll">ГЛАВНАЯ</a></li>
								<li><a href="#gallery" class="smoothScroll">ГАЛЕРЕЯ</a></li>
								<li><a href="#menu" class="smoothScroll">СПЕЦИАЛЬНОЕ МЕНЮ</a></li>
								<li><a href="#team" class="smoothScroll">ПОВАРА</a></li>

								
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
												@if($admin->id == Auth::id())
												<li><a href="{{ route('bookingUserAll') }}">Бронирование </a></li>
												@else
												<li><a href="{{ route('booking') }}">Бронирование </a></li>
												@endif
										</ul>
								</li>	
								<li role="presentation" class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
											ОТЗЫВЫ <span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											@if(Auth::id() == $admin->id)
														<li><a href="{{ route('feedbackAll') }}">Все отзывы</a></li>
														@else
														<li><a href="{{ route('feedback') }}">Все отзывы</a></li>
											@endif
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
										<li><a href="{{ url('/admin') }}">Сайт для админа</a></li>
										<li><a href="{{ url('/dashboard') }}">Личный кабинет админа</a></li>
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
						</ul>
					</div>
			</div>
	</section> 