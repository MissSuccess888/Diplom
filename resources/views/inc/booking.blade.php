	<!-- contact section -->
	<section id="contact" class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
					<h1 class="heading">Свяжитесь с нами</h1>
					<hr>

					<div class="content">
						Отправьте заявку на проведение мероприятия, и наши менеджеры подберут для вас оптимальные условия, помогут
						составить
						меню с учетом всех пожеланий и выделенного на эти цели бюджета.

						Скидки действуют для прямых заказчиков.
						<br /><br />
						Мы позаботимся о том, чтобы ваше торжество запомнилось надолго!
					</div>


				</div>
				<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
					@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
						
        @endif
				
					<form action="{{ route('bookingSubmit')}}" method="POST">
						@csrf 

@if(Route::has('login'))
		@auth
						<div class="col-md-6 col-sm-4">
						<input style="background-color:#80808059;" name="name" type="text" class="form-control"  id="name" placeholder="Имя	" value="{{ Auth::user()->name }}">
				@else
						<input name="name" type="text" class="form-control"  id="name" placeholder="Имя	" value="{{ old('name') }}">
		@endauth
						</div>
						<div class="col-md-6 col-sm-4">
							<input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон" value="{{ old('phone') }}">
						</div>
		@auth
						<div class="col-md-4 col-sm-4">
							<input style="background-color:#80808059;" name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{ Auth::user()->email }}">
				@else
							<input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}">
		@endauth
						</div>
					
						<div class="col-md-4 col-sm-4">
							<input name="number" type="number" class="form-control" id="number" placeholder="Количество гостей" value="">{{ old('number') }}
						</div>
						<div class="col-md-4 col-sm-4">
							<input name="date" type="date" class="form-control" id="date" placeholder="Дата" value="">{{ old('date') }}
						</div>
						<div class="col-md-12 col-sm-12">
							<textarea name="message" rows="8" class="form-control" id="message" placeholder="Какое событие вы планируете отметить? Напишите ваши ожидания и пожелания." value="ghbdtn">{{ old('message') }}</textarea>
						</div>
						<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
							<input name="submit" type="submit" class="form-control" id="submit" value="БРОНИРОВАНИЕ">
						</div>
@endif
					</form>
				</div>
				<div class="col-md-2 col-sm-1"></div>
			</div>
		</div>
	</section>
