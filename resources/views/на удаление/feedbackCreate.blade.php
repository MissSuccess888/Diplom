 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
					<br>
					@if (Route::has('login'))
					@auth
					<h3><span style="color:#d60c00;">{{ Auth::user()-> name }}, </span> здесь вы можете написать свой отзыв</h3>
							@else
					<h3>Здесь вы можете написать свой отзыв</h3>
					@endauth
					@endif
        @if ($errors->any())
            <div class="alert alert-danger" style="margin-top: 0; font-size: calc(0.8em + 0.1vw);">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('feedbackCreateSubmit') }}" style="margin-top: 0em;">
            @csrf
            <div class="form-group " >
							<br>
							 <label for="exampleFormControlInput1" style="color:#180d07; font-weight: normal;">Электронный адрес</label>
							 @if(Route::has('login'))
							 @auth
                <input style="background-color:#80808059;" type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" id="exampleFormControlInput1" placeholder="mail@mail.ru">
 										@else
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleFormControlInput1" placeholder="mail@mail.ru">
							@endauth
							@endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" style="color:#180d07; font-weight: normal;">Поле для ввода текста</label>
                <textarea class="form-control" name="feedbackText" id="exampleFormControlTextarea1" rows="3" placeholder="Введите текст">{{ old('feedbackText') }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default active" id="submit" value="Оставить отзыв">
            </div>
        </form>
        </div>
    </div>






