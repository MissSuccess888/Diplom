<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Заявки на бронирование</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!--

Template 2076 Zentro

http://www.tooplate.com/view/2076-zentro

-->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/animate.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/nivo-lightbox.css">
	<link rel="stylesheet" href="/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>

</head>

<body>

<!-- preloader section -->
	<section class="preloader">
		<div class="sk-spinner sk-spinner-pulse"></div>
	</section>

	<!-- navigation section -->
	<section class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="{{ route('auth')}}" class="navbar-brand" style="color:#E91E63;">РЕСТОРАН ВКУСНОЙ ЕДЫ</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ route('auth')}}" class="smoothScroll">ГЛАВНАЯ</a></li>
					@include('feedback.navfeedback')
					@include('feedback.navauth')
				
				</ul>
			</div>
		</div>
	</section>

 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h2  class="heading">{{$name }}, Ваши заявки на бронирование</h2>
						<br>
						
            @foreach ($data as $el)

						@if($el->id_user==Auth::id())
                <div class="card mt-2">
                <h5 class="card-header">Дата бронирования: {{ $el->date }}</h5>
                <div class="card-body">
                    <h5 class="card-title">Дата заявки: {{ $el->created_at }}</h5>
                    <h5 class="card-title">Последнее обновление: {{ $el->updated_at }}</h5>
                    <p class="card-text">{{ $el->message }}</p>
                    <!-- <a href="{{ route('feedbackView', $idFeedback = $el->id) }}" class="btn btn-primary">Посмотреть полностью</a> -->
                </div>
                </div>
								<br><br>
						@endif
            @endforeach


<a href="#booking" class="btn btn-default btn-lg btn-block">Забронировать</a>

<form action="{{ route('bookingSubmit')}}" method="POST" id="#booking">
						@csrf 
						<div class="col-md-6 col-sm-4">
							<input name="name" type="text" class="form-control" id="name" placeholder="Имя	">
						</div>
						<div class="col-md-6 col-sm-4">
							<input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон">
						</div>
						<div class="col-md-4 col-sm-4">
							<input name="email" type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="col-md-4 col-sm-4">
							<input name="number" type="number" class="form-control" id="number" placeholder="Количество гостей">
						</div>
						<div class="col-md-4 col-sm-4">
							<input name="date" type="date" class="form-control" id="date" placeholder="Дата">
						</div>
						<div class="col-md-12 col-sm-12">
							<textarea name="message" rows="8" class="form-control" id="message" placeholder="Какое событие вы планируете отметить? Напишите ваши ожидания и пожелания."></textarea>
						</div>
						<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
							<input name="submit" type="submit" class="form-control" id="submit" value="БРОНИРОВАНИЕ">
						</div>
					</form>
				</div>
				<div class="col-md-2 col-sm-1"></div>
			</div>
		</div>
	</section>


						
							 
        
	

	<!-- footer section -->
	<footer class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<h2 class="heading">Контакты</h2>
					<div class="ph">
						<p><i class="fa fa-phone"></i> Телефон</p>
						<h4>090-080-0760</h4>
					</div>
					<div class="address">
						<p><i class="fa fa-map-marker"></i> Адрес</p>
						<h4>120 Duis aute irure, California, USA</h4>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<h2 class="heading">Часы работы</h2>
					<p>Sunday <span>10:30 AM - 10:00 PM</span></p>
					<p>Mon-Fri <span>9:00 AM - 8:00 PM</span></p>
					<p>Saturday <span>11:30 AM - 10:00 PM</span></p>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<h2 class="heading">Follow Us</h2>
					<ul class="social-icon">
						<li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
						<li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
						<li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="0.9s"></a></li>
						<li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="0.9s"></a></li>
						<li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- copyright section -->
	<section id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h3>РЕСТОРАН ВКУСНОЙ ЕДЫ</h3>
					<p>Copyright © Restaurant and Cafe

						| Design: <a rel="nofollow" href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- JAVASCRIPT JS FILES -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.parallax.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


</body>

</html>




</body>
</html>
