<section class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon icon-bar"></span>
							<span class="icon icon-bar"></span>
							<span class="icon icon-bar"></span>
						</button>
							
								<img src="/images/fav1.png" class="block h-9 ml-1" alt="logo" width="45px"/>
								<a href="{{ route('admin')}}" class="navbar-brand" style="color:#d60c00;">РЕСТОРАН ВКУСНОЙ ЕДЫ</a>
					</div>


					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li role="presentation" class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
										КОНТЕНТ САЙТА <span class="caret"></span>
									</a>
												<ul class="dropdown-menu">
																<li><a href="#home" class="smoothScroll">ГЛАВНАЯ</a></li>
																<li><a href="#gallery" class="smoothScroll">ГАЛЕРЕЯ</a></li>
																<li><a href="#menu" class="smoothScroll">СПЕЦИАЛЬНОЕ МЕНЮ</a></li>
																<li><a href="#team" class="smoothScroll">ПОВАРА</a></li>
																<li><a href="#contact1" class="smoothScroll">КОНТАКТЫ</a></li>
												</ul>
							</li>
							<li><a href="{{  route('adminUsers')}} ">ПОЛЬЗОВАТЕЛИ</a></li>
							<li><a href="{{ route('bookingUserAll') }}">БРОНИ</a></li>
			
							<li role="presentation" class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
										ОТЗЫВЫ <span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
													<li><a href="{{ route('feedbackAll') }}">Все отзывы</a></li>
										@auth
											@if(Auth::id() == $admin->id)
													<li><a href="{{ route('feedbackCheck') }}">На проверке</a></li>
													<li><a href="{{ route('feedbackPublish') }}">Опубликованные отзывы</a></li>
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

			
							<li role="presentation" class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
										ПАНЕЛЬ АДМИНА <span class="caret"></span>
									</a>
												<ul class="dropdown-menu">
													<li><a href="{{ route('admin')}}">Сайт для админа </a></li>
													<li><a href="{{ route('dashboard')}}">Личный кабинет админа </a></li>
													<li><a href="{{ route('dashboard')}}">Выйти</a></li>
												</ul>
							</li>
						</ul>
					</div>
				</div>
</section>

				