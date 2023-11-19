
@extends('layouts.2master')  

@section('head')
  Заявка на бронь отправлена
@endsection

@section('content')
	<br><br>
@auth
	<div class="container">
			   <a href="{{ route('bookingUser')}}" style="padding-left: 0; color:  #343434;" class="navbar-brand" > <span style="color:#E91E63;">{{ $name }},</span> здесь вы можете посмотреть свои заявки на бронирование</a>
	</div>
@endauth
	
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
       	 <h3 style="color:#343434;">Спасибо <span style="color:#d60c00;">{{ $name }},</span> что выбрали наш ресторан. <br>Мы свяжемся с Вами по телефону: {{ $phone }}!</h3>
        </div>
    </div>
@endsection