@extends('layouts.2master')
@section('head')
		Редактировать отзыв
@endsection

@section('content')
 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
					<br>
				@if($data->id_user == Auth::id())
					<h3><span style="color:#d60c00;">{{ Auth::user()-> name }}, </span> здесь вы можете отредактировать свой отзыв</h3>
							@else
					<h3 style="color:#343434;">Здесь вы можете отредактировать свой отзыв</h3>
				
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

				
        <form method="post" action="{{ route('feedbackEditSubmit', $idFeedback = $data->id) }}" style="margin-top: 0em;">
            @csrf
            <div class="form-group " >
							<br>
							 <label for="exampleFormControlInput1" style="color:#180d07; font-weight: normal;">Электронный адрес</label>
                <input type="email" name="email" value="{{ $data->email }}" class="form-control" id="exampleFormControlInput1" placeholder="mail@mail.ru" style="background-color: #80808059;
}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" style="color:#180d07; font-weight: normal;">Поле для ввода текста</label>
                <textarea class="form-control" name="feedbackText" id="exampleFormControlTextarea1" rows="3" placeholder="Введите текст">{{ $data->feedback }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" style=" width: 200px; margin-right: 10px;" value="Сохранить отзыв" name="feedbackSave">
            		<input type="submit" class="btn btn-warning" style=" width: 200px;" value="Отправить на модерацию" name="feedbackModeration">
                <input type="submit" class="btn btn-default active" id="submit" style="background-color:#dbb5a199; width:200px; margin-left: 10px;" value="Удалить отзыв">
            </div>
						 
        </form>
        </div>
    </div>
@endsection 




